<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
	public function landingPage(){
		return view('LandingPage');
	}

	public function index()
    {
    	// mengambil data dari table pegawai
    	$akunumum = DB::table('akunumum')->get();

    	// mengirim data pegawai ke view index
    	return view('LandingPage',['akunumum' => $akunumum, 'akunCounter' => 0]);

    }

	public function editProfile(){
		return view('EditProfile');
	}

	public function detailedInfo(){
		return view('DetailedInfo');
	}

    public function moreRating(){
		return view('MoreRating');
	}

    public function addRating(){
		return view('AddRating');
	}
}
