<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopMCController extends Controller
{
    public function topMC(Request $request)
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

        //$search = $request->input('search');
        $akunMCQuery = DB::table('akunMC')
            ->select('mcID AS id', 'mcUsername AS col1', 'mcFullName AS col2', 'mcCity AS col3', DB::raw("CONCAT('Rp', mcPriceMin, ' -') AS col4"), 'mcPriceMax as col5', DB::raw("'' AS col6"), 'jenisAccountID AS col7', 'ratingMCID AS col8')
            ->orderByDesc('ratingMCID');

        $topmcresults = $akunMCQuery->paginate(16);

        return view('TopMC', ['akunmc' => $topmcresults, 'akunCounter' => 0, 'cities' => $cities]);
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
        $locationFilter = 0;
        $maxPrice = 0;
        $minPrice = 0;

        $dateFilter = $request->input('date_filter');
        $search = $request->input('search');
        $locationFilter = $request->input('Location');
        $maxPrice = $request->input('max_price');
        $minPrice = $request->input('min_price');

        $akunMCQuery = DB::table('akunMC')
        ->select('mcID AS id', 'mcUsername AS col1', 'mcFullName AS col2', 'mcCity AS col3', DB::raw("CONCAT('Rp', mcPriceMin, ' -') AS col4"), 'mcPriceMax as col5', DB::raw("'' AS col6"), 'jenisAccountID')
        ->where(function ($query) use ($search) {
            $query->where('mcUsername', 'LIKE', "%{$search}%")
                ->orWhere('mcFullName', 'LIKE', "%{$search}%");
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


        $filterResults = $akunMCQuery;

        // $filteredResults = $filterResults->paginate(16);
        $filteredResults = $filterResults->paginate(16)->appends(request()->except('page'));

        return view('TopMC', ['akunmc' => $filteredResults, 'akunCounter' => 0, 'searchTerm' => $search, 'cities' => $cities]);
    }
}



