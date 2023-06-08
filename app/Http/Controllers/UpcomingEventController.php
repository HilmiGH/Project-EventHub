<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpcomingEventController extends Controller
{
    public function UpcomingEvent(){
		return view('UpcomingEvent');
	}
}
