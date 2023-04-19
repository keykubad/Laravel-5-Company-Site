<?php namespace App;

/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */
use Request;
use URL;
use Carbon\Carbon;
class Helper
{
	//Yardımcı keyword ayırma fonksiyonu
	public static function keyw($metakeyw){
		$meta =explode(',',$metakeyw);
		foreach($meta as $metakeyw){
			echo '<a href="">'.$metakeyw.'</a>';
		}
	}
	//Yardımcı link fonksiyonu
	public static function dillink(){

		if(Request::segment(1)=="en"){
			return $dil="en/sayfa/";
		}elseif(Request::segment(1)=="de"){
			return $dil="de/sayfa/";
		}elseif(Request::segment(1)=="fr"){
			return $dil="fr/sayfa/";
		}else{
			return $dil="sayfa/";
		}
	}
		//Yardımcı link fonksiyonu sayfa urli olmadan
	public static function dilduzlink(){

		if(Request::segment(1)=="en"){
			return $dil="en/";
		}elseif(Request::segment(1)=="de"){
			return $dil="de/";
		}elseif(Request::segment(1)=="fr"){
			return $dil="fr/";
		}else{
			return $dil="/";
		}
	}


}