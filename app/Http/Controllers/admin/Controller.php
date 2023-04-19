<?php namespace App\Http\Controllers\admin;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Moduller;
use DB;
use App\GenelAyar;
use Config;
use Request;
use Redirect;
use Route;
use App\OzelKodlar;
abstract class Controller extends BaseController {
	use DispatchesCommands, ValidatesRequests;
	public function __construct(){
		/*DEMO MODU KONTROL İŞLEMİ BURADAN YAPILIYOR AÇIK İSE acik KAPALI İSE kapali DEĞERİ YAZ*/
		$this->beforeFilter(function()
        {
        	$demo="kapali";
       			if(Request::all() or Request::segment(3)){
	                if($demo=="acik"){
	                return Redirect::back()->with(array('mesaj'=>'Demo modunda içerik ekleme,düzenleme ve silme işlemleri yapılamaz.','type'=>'error'));
	                die();
	                }
            	}
         });
		/*DEMO MODU KONTROL İŞLEMİ BURADAN YAPILIYOR AÇIK İSE acik KAPALI İSE kapali DEĞERİ YAZ*/
		$this->beforeFilter(function()
        {
        	$kodkontrol	=@OzelKodlar::lisans('454CF-FC1D1-C8896-C76D8-660DE');
        });
		//resim boyutları için sabit çekim değişkenleri
		$this->galeriboyut	=Moduller::find(6);
		$this->logoboyut	=Moduller::find(9);
		$this->haberboyut	=Moduller::find(7);
		$this->refboyut		=Moduller::find(1);
		$this->sliderboyut  =Moduller::find(10);
		$this->urunboyut 	=Moduller::find(5);
		$this->videoboyut 	=Moduller::find(4);
		//tüm mail gönderim ayarlarında config ayarlarını override ediyoruz
		$cekayar		=GenelAyar::find(1);
		$this->mailayar	=Config::set('mail.host',$cekayar->mailhost);
		$this->mailayar	=Config::set('mail.username',$cekayar->mailkullanici);
		$this->mailayar	=Config::set('mail.password',$cekayar->mailsifre);
		$this->mailayar	=Config::set('mail.encryption',$cekayar->sifretip);
		$this->mailayar	=Config::set('mail.driver',$cekayar->driver);
		$this->mailayar	=Config::set('mail.port',$cekayar->port);
		$this->mailayar	=Config::set('mail.from',['address'=>$cekayar->kime,'name' =>$cekayar->baslik]);
	}

}
