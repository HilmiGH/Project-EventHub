<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmumController extends Controller
{
    public function index(){
        //variabel biasa
        $nama = "Faizal Johan";
        //Array
        $rating = ["1","2","3","4","5"];

    	return view('MyProfile',['nama' => $nama, 'rating' => $rating]);
    }

    public function editProfile(){

    	return view('EditProfile');

    }

    public function update(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
