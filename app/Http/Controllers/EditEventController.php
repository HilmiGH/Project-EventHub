<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditEvent extends Controller
{
    public function editevent(){
        return view('EditEvent');
    }
}
