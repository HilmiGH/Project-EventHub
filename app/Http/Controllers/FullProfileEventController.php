<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FullProfileEventController extends Controller{
    public function showEventProfile($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $events = DB::table('events')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('FullProfileEvent',['events' => $events]);
    }
}

