<?php namespace App\Http\Controllers\onyuz;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Moduller;
use DB;
use View;
use App\User;
use Request;
use App\GenelAyar;
use Config;
use App\SiteAyar;
use App\Sayfalar;
use App\OzelKodlar;
abstract class Controller extends BaseController {
	public $metatitle;
	public $metadesc;
	public $metakeyw;
	use DispatchesCommands, ValidatesRequests;
	//sabit paylaşılacak değişkenlerim
	//tüm mail gönderim ayarlarında config ayarlarını override ediyoruz
	public function __construct(){
		$cekayar		=GenelAyar::find(1);
		$this->mailayar	=Config::set('mail.host',$cekayar->mailhost);
		$this->mailayar	=Config::set('mail.username',$cekayar->mailkullanici);
		$this->mailayar	=Config::set('mail.password',$cekayar->mailsifre);
		$this->mailayar	=Config::set('mail.encryption',$cekayar->sifretip);
		$this->mailayar	=Config::set('mail.driver',$cekayar->driver);
		$this->mailayar	=Config::set('mail.port',$cekayar->port);
		$this->mailayar	=Config::set('mail.from',['address'=>$cekayar->kime,'name' =>$cekayar->baslik]);
		//TEMA YOLU BURADA
		$this->tema="income";
		//Modül durumu kontrolü
		$videomodul			=Moduller::find(4);
		$referansmodul		=Moduller::find(1);
		$galerimodul		=Moduller::find(6);
		$habermodul			=Moduller::find(7);
		$urunmodul			=Moduller::find(5);
		$slidermodul		=Moduller::find(10);
		$this->beforeFilter(function()
        {
        	$kodkontrol	=@OzelKodlar::lisans('454CF-FC1D1-C8896-C76D8-660DE');
        });
		//Modül durumu kontrolü
		//Dil için site ayar kontrolu ile eklenip eklenmediği kontrolu
		$diltrsiteayar	=SiteAyar::where('dil', '=', 'tr')->first();
		$dilensiteayar	=SiteAyar::where('dil', '=', 'en')->first();
		$dilfrsiteayar	=SiteAyar::where('dil', '=', 'fr')->first();
		$dildesiteayar	=SiteAyar::where('dil', '=', 'de')->first();
		//Dil için site ayar kontrolu ile eklenip eklenmediği kontrolu
		//genelayarları çek
		$genelayar      =DB::table('genelayar')->first();
		$genelayarsosyal=explode("\n",$genelayar->sitesosyal);
		//user metodu ve galeri link
		$user   		=User::find(1);
		//metalarım 
		$meta			=DB::table('siteayar')->where('dil', '=', 'tr')->first();
		$footer			=DB::table('siteayar')->first();
		$metatitle		=$meta->siteadi;
		$metadesc		=$meta->sitedesc;
		$metakeyw		=$meta->sitekeyw;
		//metalarım 
		$menucek 		=DB::table('sayfalar')->where('sayfadil', '=', 'tr')->where('katid', '=', '0')->where('durum','=','1')->take(5)->get();
		if(Request::segment(1)=="en"){
			$menucek 		=DB::table('sayfalar')->where('sayfadil', '=', 'en')->where('durum','=','1')->where('katid', '=', '0')->take(5)->get();
		}elseif(Request::segment(1)=="de"){
			$menucek 		=DB::table('sayfalar')->where('sayfadil', '=', 'de')->where('durum','=','1')->where('katid', '=', '0')->take(5)->get();
		}elseif(Request::segment(1)=="fr"){
			$menucek 		=DB::table('sayfalar')->where('sayfadil', '=', 'fr')->where('durum','=','1')->where('katid', '=', '0')->take(5)->get();
		}
		View::share(compact('genelayar',$genelayar,'user',$user,
			'menucek',$menucek,'metatitle',$metatitle,'metadesc',$metadesc,'metakeyw',$metakeyw,
			'footer',$footer,'meta',$meta,'diltrsiteayar',$diltrsiteayar,'dilensiteayar',$dilensiteayar,'dilfrsiteayar',$dilfrsiteayar,'dildesiteayar',$dildesiteayar,'videomodul',$videomodul,'referansmodul',$referansmodul,'galerimodul',$galerimodul,'habermodul',$habermodul,'urunmodul',$urunmodul,'slidermodul',$slidermodul,'genelayarsosyal',$genelayarsosyal
			));
	}

}