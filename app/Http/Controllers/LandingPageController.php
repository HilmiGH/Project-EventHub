<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
	public function landingPage(){
		return view('LandingPage');
	}

	public function myProfile(){
        //variabel biasa
        $nama = "Faizal Johan";
        //Array
        $rating = ["1","2","3","4","5"];
        return view('MyProfile', ['nama' => $nama, 'rating' => $rating]);
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
