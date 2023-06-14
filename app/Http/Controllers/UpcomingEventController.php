<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpcomingEventController extends Controller
{
    public function upcomingEvent(Request $request)
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


        $eventsQuery = DB::table('events')
            ->select('id AS id', 'eventName AS col1', 'numberOfMC AS col2', 'eventLocation AS col3', 'eventDate AS col4', DB::raw("'' AS col5"), 'eventType AS col6', 'jenisAccountID AS col7')
            //->where('eventDate', '>', date('Y-m-d')) // Include dates after today
            ->orderBy('eventDate', 'asc'); // Sort by eventDate in ascending order

        $searchResults = $eventsQuery->paginate(16);

        return view('UpcomingEvent', ['events' => $searchResults, 'akunCounter' => 0, 'cities' => $cities]);
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

        $eventFilter = 0;
        $locationFilter = 0;

        $dateFilter = $request->input('date_filter');
        $search = $request->input('search');
        $locationFilter = $request->input('Location');
        $eventTypeFilter = $request->input('eventType');


        $eventsQuery = DB::table('events')

        ->select('id AS id', 'eventName AS col1', 'numberOfMC AS col2', 'eventLocation AS col3', 'eventDate AS col4', DB::raw("'' AS col5"), 'eventType AS col6', 'jenisAccountID')
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

        $filterResults = $eventsQuery;

        // $filteredResults = $filterResults->paginate(16);
        $filteredResults = $filterResults->paginate(16)->appends(request()->except('page'));

        return view('searchPage', ['akunmc' => $filteredResults, 'akunCounter' => 0, 'searchTerm' => $search, 'cities' => $cities]);
    }
}



