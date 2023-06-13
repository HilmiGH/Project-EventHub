<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FullProfileEventController extends Controller{
    public function profile(){
		return view('FullProfileEvent');
	}
}

