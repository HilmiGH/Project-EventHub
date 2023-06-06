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
        // $cities = [];
        // if (($handle = fopen(public_path('csv/cities.csv'), 'r')) !== false) {
        //     while (($data = fgetcsv($handle, 1000, ',')) !== false) {
        //         $parts = explode(',', $data[2]);
        //         $city = end($parts);
        //         $cities[] = $city;
        //     }
        //     fclose($handle);
        // }

        $search = $request->input('search');
        $akunMCQuery = DB::table('akunMC')
            ->select('mcID AS id', 'mcUsername AS col1', 'mcFullName AS col2', 'mcCity AS col3', DB::raw("CONCAT('Rp', mcPriceMin, ' -') AS col4"), 'mcPriceMax as col5', DB::raw("'' AS col6"), 'jenisAccountID AS col7')
            ->where('mcUsername', 'LIKE', "%{$search}%")
            ->orWhere('mcFullName', 'LIKE', "%{$search}%");

        $eventsQuery = DB::table('events')
            ->select('eventID AS id', 'eventName AS col1', 'numberOfMC AS col2', 'eventLocation AS col3', 'eventDate AS col4', DB::raw("'' AS col5"), 'eventType AS col6', 'jenisAccountID AS col7')
            ->where('eventName', 'LIKE', "%{$search}%");

        $searchResults = $akunMCQuery->union($eventsQuery)->paginate(16);
        // dd($searchResults);
        return view('searchPage', ['akunmc' => $searchResults, 'akunCounter' => 0, 'searchTerm' => $search]);
    }

    public function filter(Request $request)
    {
    $mcFilter = 0;
    $eventFilter = 0;

    $search = $request->input('search');
    $mcFilter = $request->input('MC');
    $eventFilter = $request->input('Event');

    $akunMCQuery = DB::table('akunMC')
    ->select('mcID AS id', 'mcUsername AS col1', 'mcFullName AS col2', 'mcCity AS col3', DB::raw("CONCAT('Rp', mcPriceMin, ' -') AS col4"), 'mcPriceMax as col5', DB::raw("'' AS col6"), 'jenisAccountID')
    ->where(function ($query) use ($search) {
        $query->where('mcUsername', 'LIKE', "%{$search}%")
            ->orWhere('mcFullName', 'LIKE', "%{$search}%");
    });

    if ($mcFilter == "2" && $eventFilter == "3") {
        $akunMCQuery->where('jenisAccountID', '=', "2")
            ->orWhere('jenisAccountID', '=', "3");
    } elseif ($mcFilter == "2") {
        $akunMCQuery->where('jenisAccountID', '=', "2");
    } elseif ($eventFilter == "3") {
        $akunMCQuery->where('jenisAccountID', '=', "3");
    }

    // dd($akunMCQuery->get());
    // dd($akunMCQuery->toSql());

    $eventsQuery = DB::table('events')
        ->select('eventID AS id', 'eventName AS col1', 'numberOfMC AS col2', 'eventLocation AS col3', 'eventDate AS col4', DB::raw("'' AS col5"), 'eventType AS col6', 'jenisAccountID')
        ->where(function ($query) use ($search) {
            $query->where('eventName', 'LIKE', "%{$search}%");
        });
        ;

        if ($mcFilter == "2" && $eventFilter == "3") {
            $eventsQuery->where('jenisAccountID', '=', "3")
                ->orWhere('jenisAccountID', '=', "2");
        } elseif ($mcFilter == "2") {
            $eventsQuery->where('jenisAccountID', '=', "2");
        } elseif ($eventFilter == "3") {
            $eventsQuery->where('jenisAccountID', '=', "3");
        }

    $filterResults = $akunMCQuery->union($eventsQuery);

    // $filteredResults = $filterResults->paginate(16);
    $filteredResults = $filterResults->paginate(16)->appends(request()->except('page'));

    return view('searchPage', ['akunmc' => $filteredResults, 'akunCounter' => 0, 'searchTerm' => $search]);
    }
}
