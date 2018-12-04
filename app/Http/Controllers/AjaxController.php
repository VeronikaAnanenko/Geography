<?php

namespace App\Http\Controllers;
use App\Parser\GoogleNews;
use App\Parser\WikipediaInfo;
use App\City;

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
		$obj=new WikipediaInfo;
		$pars=$obj->getParse($country);
		
     return view('ajax.info',compact("country"));
	}
}
