<?php

namespace App\Http\Controllers;
use App\Parser\GoogleNews;
use App\Parser\WikipediaInfo;
use App\City;
use App\CountryEn;
use App\CityGeo;

class AjaxController extends Controller
{
    public function getNews(){
		$country=$_GET["country"];
		$obj=new GoogleNews;
		$pars=$obj->getParse($country);
		
     return view('ajax.iframe',compact("country"));
    }
	public function getInfo(){
		$country=$_GET["country"];
		$obj=new WikipediaInfo;
		$pars=$obj->getParse($country);
		
     return view('ajax.info',compact("country"));
	}
	public function getCities(){
		$country=$_GET["country"];
		$obj=CountryEn::where("country_name",$country)->first();
		$cities=CityGeo::where("country_id",$obj->id)->get();
     return view('ajax.city',compact("country","cities"));
	}
	public function getCabinet(){
		$id=(int)$_POST['id'];
		$cities=CityGeo::where('country_id',$id)->get();
		return view('ajax.cabinet', compact("cities"));
	}
}
