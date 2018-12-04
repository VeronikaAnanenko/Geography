<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CountryEn;
use App\CountryRu;
use App\CityGeo;

class CountryController extends Controller
{
 protected $data;
	public function __construct(){
		$path = config_path().'/countries_states.json';
		$json = file_get_contents($path);
		$data = json_decode($json,true);
		$this->data = $data; 
	}

    public function getIndex($url = null){
        $obj = CountryEn::where('country_iso_code', $url)->first();
        //$cities = City::where('country_iso_code', $obj->country_iso_code)->get();
        //dd($cities);
        return view('country',compact('obj','cities'));
    }
	public function getName($url=null, $name = null){
        $obj = CountryEn::where('country_name', $name)->first();
		
        if (isset($_COOKIE['lang'])) {
            if ($_COOKIE['lang'] == 'DEU') {
                $obj = CountryDe::where('country_iso_code', $obj->country_iso_code)->first();
            } elseif ($_COOKIE['lang'] == 'Rus') {
                $obj = CountryRu::where('country_iso_code', $obj->country_iso_code)->first();
            } else {
                $obj = CountryEn::where('country_name', $name)->first();

            }
        }
//        dd($obj);
		    $states = [];
		 foreach($this->data['countries'] as $i => $v)
            {
			 if($v['country'] == $name){
			  $states = $v['states'];
			 } 
            } 
		//$cities = City::where('country_iso_code', $obj->country_iso_code)->get();
		return view('country', compact('obj', 'states','name'));
	}
}
