<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class McController extends Controller
{
    public function index($nama){
        return $nama;
   }
}
