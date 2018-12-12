<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CityGeo;

class CityController extends Controller
{
    public function getCity($id=null){
		$obj=CityGeo::find($id);
		return view('city',compact('obj'));
	}
}
