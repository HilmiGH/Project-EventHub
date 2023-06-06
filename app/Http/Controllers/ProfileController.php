<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

    public function myProfile()
    {
        // mengambil data dari table pegawai
        $akunumum = DB::table('akunumum')->get();

        // mengirim data pegawai ke view index
        return view('MyProfile',['akunumum' => $akunumum]);

    }

    public function editProfile($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $akunumum = DB::table('akunumum')->where('umumID',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('EditProfile',['akunumum' => $akunumum]);
    }

    public function myProfileUpdate(Request $request)
    {

        // update data pegawai
	    DB::table('akunumum')->where('umumID',$request->umumid)->update([
		'umumUsername' => $request->umumUsername,
		'umumFullName' => $request->umumFullName,
		'umumPhone' => $request->umumPhone,
		'umumCity' => $request->umumCity,
        'umumDOB' => $request->umumDOB
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/landingpage/myprofile/{id}');

    }

    public function editProfileMC(){
        return view('EditProfileMC');
    }

    public function editProfileEO(){
        return view('EditProfileEO');
    }

    public function myProfileMC(Request $request)
    {
        $username = $request->input('username');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $instagram = $request->input('instagram');
        $city = $request->input('city');
        $dob = $request->input('dob');
        $language = $request->input('language');
        $specialization = $request->input('specialization');
        $priceRange = $request->input('price-range');
        $experience = $request->input('experience');

        return view('MyProfileMC', compact('username', 'name', 'email', 'phone', 'instagram', 'city', 'dob', 'language', 'specialization', 'priceRange', 'experience'));
    }

    public function myProfileEO(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $companyname = $request->input('companyname');
        $companytype = $request->input('companytype');
        $city = $request->input('city');
        $contactperson = $request->input('contactperson');
        $eventcategory = $request->input('eventcategory');

        return view('MyProfileEO', compact('username', 'password', 'companyname', 'companytype', 'city', 'contactperson', 'eventcategory'));
    }
}
