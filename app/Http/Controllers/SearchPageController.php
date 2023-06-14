<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchPageController extends Controller
{
    public function index()
    {
        $akunmc = DB::table('akunmc')->paginate(16);
        return view('searchPage', ['akunmc' => $akunmc, 'akunCounter' => 0]);
    }

    public function searchMCEvent(Request $request)
    {
      $cities = [];
        if (($handle = fopen(public_path('csv/cities.csv'), 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                $parts = explode(',', $data[2]);
                $city = end($parts);
                // Extract the words after "KABUPATEN" or "KOTA"
                preg_match('/(?:KABUPATEN|KOTA)\s(.+)/', $city, $matches);
                $extractedCity = $matches[1] ?? '';

                $cities[] = $extractedCity;

                // Sort the cities array in ascending order
                sort($cities);
            }
            fclose($handle);
        }

        $search = $request->input('search');
        $akunMCQuery = DB::table('akunMC')
            ->select('id AS id', 'mcUsername AS col1', 'mcFullName AS col2', 'mcCity AS col3', DB::raw("CONCAT('Rp ', mcPriceMin, ' -') AS col4"), 'mcPriceMax as col5', DB::raw("'See Profile' AS col6"), 'jenisAccountID AS col7', 'mcImage AS col8')
            ->where('mcUsername', 'LIKE', "%{$search}%");

        $eventsQuery = DB::table('events')
            ->select('id AS id', 'eventName AS col1', 'numberOfMC AS col2', 'eventLocation AS col3', 'eventDate AS col4', DB::raw("'' AS col5"), 'eventType AS col6', 'jenisAccountID AS col7', 'eventImage AS col8')
            ->where('eventName', 'LIKE', "%{$search}%");

        $searchResults = $akunMCQuery->union($eventsQuery)->paginate(16);

        return view('searchPage', ['akunmc' => $searchResults, 'akunCounter' => 0, 'searchTerm' => $search, 'cities' => $cities]);
    }

    public function filter(Request $request)
    {

        $cities = [];
        if (($handle = fopen(public_path('csv/cities.csv'), 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                $parts = explode(',', $data[2]);
                $city = end($parts);
                // Extract the words after "KABUPATEN" or "KOTA"
                preg_match('/(?:KABUPATEN|KOTA)\s(.+)/', $city, $matches);
                $extractedCity = $matches[1] ?? '';

                $cities[] = $extractedCity;

                // Sort the cities array in ascending order
                sort($cities);
            }
            fclose($handle);
        }

        $mcFilter = 0;
        $eventFilter = 0;
        $locationFilter = 0;
        $maxPrice = 0;
        $minPrice = 0;

        $dateFilter = $request->input('date_filter');
        $search = $request->input('search');
        $mcFilter = $request->input('MC');
        $eventFilter = $request->input('Event');
        $locationFilter = $request->input('Location');
        $maxPrice = $request->input('max_price');
        $minPrice = $request->input('min_price');
        $eventTypeFilter = $request->input('eventType');

        $akunMCQuery = DB::table('akunMC')
        ->select('id AS id', 'mcUsername AS col1', 'mcFullName AS col2', 'mcCity AS col3', DB::raw("CONCAT('Rp ', mcPriceMin, ' -') AS col4"), 'mcPriceMax as col5', DB::raw("'' AS col6"), 'jenisAccountID', 'mcImage AS col8')
        ->where(function ($query) use ($search) {
            $query->where('mcUsername', 'LIKE', "%{$search}%");
        });

        if ($mcFilter == "2" && $eventFilter == "3") {
            $akunMCQuery->where(function ($query) {
                $query->where('jenisAccountID', '=', "2")
                    ->orWhere('jenisAccountID', '=', "3");
            });
        } elseif ($mcFilter == "2") {
            $akunMCQuery->where('jenisAccountID', '=', "2");
        } elseif ($eventFilter == "3") {
            $akunMCQuery->where('jenisAccountID', '=', "3");
        }

        if ($locationFilter != "0") {
            $akunMCQuery->where('mcCity', '=', $locationFilter);
        }

        if ($maxPrice != "0" && is_numeric($maxPrice)) {
            $akunMCQuery->where('mcPriceMax', '<=', $maxPrice);
        }

        if ($minPrice != "0" && is_numeric($minPrice)) {
            $akunMCQuery->where(function ($query) use ($minPrice, $maxPrice) {
                $query->where(function ($query) use ($minPrice) {
                    $query->where('mcPriceMin', '>=', $minPrice)
                        ->orWhere('mcPriceMax', '>=', $minPrice);
                });

                if ($maxPrice !== null && is_numeric($maxPrice)) {
                    $query->where(function ($query) use ($maxPrice) {
                        $query->where('mcPriceMax', '<=', $maxPrice)
                            ->orWhere('mcPriceMin', '<=', $maxPrice);
                    });
                }
            });
        }



        $eventsQuery = DB::table('events')

        ->select('id AS id', 'eventName AS col1', 'numberOfMC AS col2', 'eventLocation AS col3', 'eventDate AS col4', DB::raw("'' AS col5"), 'eventType AS col6', 'jenisAccountID', 'eventImage AS col8')
        ->where(function ($query) use ($search) {
            $query->where('eventName', 'LIKE', "%{$search}%");
        });

            if ($mcFilter == "2" && $eventFilter == "3") {
                $eventsQuery->where(function ($query) {
                    $query->where('jenisAccountID', '=', "2")
                        ->orWhere('jenisAccountID', '=', "3");
                });
            } elseif ($mcFilter == "2") {
                $eventsQuery->where('jenisAccountID', '=', "2");
            } elseif ($eventFilter == "3") {
                $eventsQuery->where('jenisAccountID', '=', "3");
            }
            // dd($eventsQuery->get());
            if ($locationFilter != "0") {
                $eventsQuery->where('eventLocation', '=', $locationFilter);
            }

            if ($maxPrice != "0" && is_numeric($maxPrice)) {
                $eventsQuery->where('jenisAccountID', '=', '2');
            }
            if ($minPrice != "0" && is_numeric($minPrice)) {
                $eventsQuery->where('jenisAccountID', '=', '2');
            }

            if (!empty($dateFilter)) {
                $eventsQuery->whereDate('eventDate', '=', $dateFilter);
                $akunMCQuery->where('jenisAccountID', '=', '3');
            };


            if ($eventTypeFilter) {
                $eventsQuery->where('eventType', '=', $eventTypeFilter);
                $akunMCQuery->where('jenisAccountID', '=', '3');
            };

        $filterResults = $akunMCQuery->union($eventsQuery);

        // $filteredResults = $filterResults->paginate(16);
        $filteredResults = $filterResults->paginate(16)->appends(request()->except('page'));

        return view('searchPage', ['akunmc' => $filteredResults, 'akunCounter' => 0, 'searchTerm' => $search, 'cities' => $cities]);
    }
}
