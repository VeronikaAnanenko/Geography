<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getCities($country_id=null){
		return view('cities');
	}
}
