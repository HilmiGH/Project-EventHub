<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditProfile extends Controller
{
    public function editProfile(){
        return view('EditProfile');
    }
}
