<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchPageController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$akunmc = DB::table('akunmc')->paginate(16);
		
    	// mengirim data pegawai ke view index
    	return view('searchPage',['akunmc' => $akunmc, 'akunCounter' => 0,]);
 
    }

	public function searchMCEvent(Request $request)
	{
		$filteredData = $request->query('filteredData');

		// menangkap data pencarian
		$search = $request->search;

		$akunMCQuery = DB::table('akunMC')
    	->select('mcID AS id', 'mcUsername AS col1', 'mcFullName AS col2', 'mcCity AS col3', DB::raw("CONCAT('Rp', mcPriceMin, ' -') AS col4"), 'mcPriceMax as col5', DB::raw("'' AS col6"))
    	->where('mcUsername', 'LIKE', "%{$search}%")
    	->orWhere('mcFullName', 'LIKE', "%{$search}%");

		$eventsQuery = DB::table('events')
		->select('eventID AS id', 'eventName AS col1', 'numberOfMC AS col2', 'eventLocation AS col3', 'eventDate AS col4', DB::raw("'' AS col5"), 'eventType AS col6')
		->where('eventName', 'LIKE', "%{$search}%");

		$searchResults = $akunMCQuery->union($eventsQuery)->paginate(16);

    	// mengirim data pegawai ke view index
		return view('SearchPage',['akunmc' => $searchResults, 'akunCounter' => 0,]);
 
	}
}
