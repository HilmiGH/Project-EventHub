<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditEventController extends Controller
{
    public function editevent(){
        return view('EditEvent');
    }
}
