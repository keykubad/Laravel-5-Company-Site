<?php namespace App\Http\Controllers\onyuz;
/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */
use DB;
use Request;
use App\Sayfalar;
use App\Kategori;
use App\User;
use App\Duyurular;
use App\Referans;
use App\Moduller;
use App\Galeri;
use App\Helper;
use App\EkstraAlan;
use App\GaleriKategori;
use App\SiteAyar;

class IndexController extends Controller {
//anasayfa tüm işlemleri
	public function trindex()
	{	
		//slider çek
		$slider 		=DB::table('slider')->where('sliderdil', '=', 'tr')->orderBy('slidersira', 'asc')->get();
		//ürünleri çek
		$urun 			=DB::table('urunler')->where('urundil', '=', 'tr')->where('anasayfa', '=', '1')->orderBy('id','desc')->first();
		//galeri resimleri
		$galeri 		=DB::table('galeri')->where('galeridil', '=', 'tr')->where('anasayfa', '=', '1')->take(8)->get();
		$galeriyazi 	=DB::table('galeri')->orderBy('id', 'desc')->where('galeridil', '=', 'tr')->first();
		$ekalan 		=EkstraAlan::find(2);
		$ekalanmusteri 		=EkstraAlan::find(3);
		$ekalanorta 		=EkstraAlan::find(4);
		$musteriyorum		=explode('-----',$ekalanmusteri->alan);
		//galeri bitiş
		//dil için link
		$dil=Helper::dillink(); 
		//modül durumları
		$ref =Moduller::find(1);
		$sip =Moduller::find(2);
		$duyurusorgu =Sayfalar::where('modulid', '=', '3')->where('sayfadil', '=', 'tr')->first();
		$videosorgu =Sayfalar::where('modulid', '=', '4')->where('sayfadil', '=', 'tr')->orderBy('id','desc')->first();
		$x			=1;
		$referans  	=Referans::take(8)->orderBy('id','desc')->get();
		$duyuru     =DB::table('duyurular')->where('duyurudil', '=', 'tr')->where('anasayfa', '=', '1')->orderBy('id','desc')->first();
		$video      =DB::table('video')->where('videodil', '=', 'tr')->where('anasayfa', '=', '1')->orderBy('id','desc')->first();
		$meta		=DB::table('siteayar')->where('dil', '=', 'tr')->first();
		$haberler	=DB::table('haberler')->where('haberdil', '=', 'tr')->where('anasayfa', '=', '1')->take(3)->get();
		
		return view('tema.'.$this->tema.'.index',compact('meta','user','duyuru','haberler','x','referans','video',
			'ref','sip','galeri','galeriyazi','urun','slider','yazi','menucek','genelayar','duyurusorgu','dil','ekalan','videosorgu','musteriyorum','ekalanorta'));
	}
	public function enindex()
	{	
		//slider çek
		$slider 		=DB::table('slider')->where('sliderdil', '=', 'en')->orderBy('slidersira', 'asc')->get();
		//ürünleri çek
		$urun 			=DB::table('urunler')->where('urundil', '=', 'en')->where('anasayfa', '=', '1')->orderBy('id','desc')->first();
		$ekalan 		=EkstraAlan::find(2);
		//galeri resimleri
		$galeri 		=DB::table('galeri')->where('galeridil', '=', 'en')->where('anasayfa', '=', '1')->take(12)->get();
		$duyurusorgu =Sayfalar::where('modulid', '=', '3')->where('sayfadil', '=', 'en')->first();
		$galeriyazi 	=DB::table('galeri')->orderBy('id', 'desc')->where('anasayfa', '=', '1')->where('galeridil', '=', 'en')->first();
		//galeri bitiş
		//dil için link
		$dil=Helper::dillink();
		//modül durumları
		$ref =Moduller::find(1);
		$sip =Moduller::find(2);
		$x			=1;
		$referans  	=Referans::all();
		$duyuru     =DB::table('duyurular')->where('duyurudil', '=', 'en')->where('anasayfa', '=', '1')->orderBy('id','desc')->first();
		$video      =DB::table('video')->where('videodil', '=', 'en')->where('anasayfa', '=', '1')->orderBy('id','desc')->first();
		$meta		=DB::table('siteayar')->where('dil', '=', 'en')->first();
		$haberler	=DB::table('haberler')->where('haberdil', '=', 'en')->where('anasayfa', '=', '1')->take(3)->get();

		return view('tema.'.$this->tema.'.index',compact('meta','user','duyuru','haberler','x','referans','video',
			'ref','sip','galeri','galeriyazi','urun','slider','yazi','menucek','genelayar','duyurusorgu','dil','ekalan'));
	}
	public function deindex()
	{	
		//slider çek
		$slider 		=DB::table('slider')->where('sliderdil', '=', 'de')->orderBy('slidersira', 'asc')->get();
		//ürünleri çek
		$urun 			=DB::table('urunler')->where('urundil', '=', 'de')->where('anasayfa', '=', '1')->orderBy('id','desc')->first();
		//galeri resimleri
		$galeri 		=DB::table('galeri')->where('galeridil', '=', 'de')->take(12)->get();
		$galeriyazi 	=DB::table('galeri')->orderBy('id', 'desc')->where('anasayfa', '=', '1')->where('galeridil', '=', 'de')->first();
		$duyurusorgu =Sayfalar::where('modulid', '=', '3')->where('sayfadil', '=', 'de')->first();
		//galeri bitiş
				//dil için link
		$ekalan 		=EkstraAlan::find(2);
		$dil=Helper::dillink(); 
		//modül durumları
		$ref =Moduller::find(1);
		$sip =Moduller::find(2);
		$x			=1;
		$referans  	=Referans::all();
		$duyuru     =DB::table('duyurular')->where('duyurudil', '=', 'de')->where('anasayfa', '=', '1')->orderBy('id','desc')->first();
		$video      =DB::table('video')->where('videodil', '=', 'de')->where('anasayfa', '=', '1')->orderBy('id','desc')->first();
		$meta		=DB::table('siteayar')->where('dil', '=', 'de')->first();
		$haberler	=DB::table('haberler')->where('haberdil', '=', 'de')->where('anasayfa', '=', '1')->take(3)->get();

		return view('tema.'.$this->tema.'.index',compact('meta','user','duyuru','haberler','x','referans','video',
			'ref','sip','galeri','galeriyazi','urun','slider','yazi','menucek','genelayar','duyurusorgu','dil','ekalan'));
	}
	public function frindex()
	{	
		//slider çek
		$slider 		=DB::table('slider')->where('sliderdil', '=', 'fr')->orderBy('slidersira', 'asc')->get();
		//ürünleri çek
		$urun 			=DB::table('urunler')->where('urundil', '=', 'fr')->where('anasayfa', '=', '1')->orderBy('id','desc')->first();
		//galeri resimleri
		$galeri 		=DB::table('galeri')->where('galeridil', '=', 'fr')->where('anasayfa', '=', '1')->take(12)->get();
		$galeriyazi 	=DB::table('galeri')->orderBy('id', 'desc')->where('anasayfa', '=', '1')->where('galeridil', '=', 'fr')->first();
		$duyurusorgu =Sayfalar::where('modulid', '=', '3')->where('sayfadil', '=', 'fr')->first();
		//galeri bitiş
		$ekalan 		=EkstraAlan::find(2);
				//dil için link
		$dil=Helper::dillink(); 
		//modül durumları
		$ref =Moduller::find(1);
		$sip =Moduller::find(2);
		$x			=1;
		$referans  	=Referans::all();
		$duyuru     =DB::table('duyurular')->where('duyurudil', '=', 'fr')->where('anasayfa', '=', '1')->orderBy('id','desc')->first();
		$video      =DB::table('video')->where('videodil', '=', 'fr')->where('anasayfa', '=', '1')->orderBy('id','desc')->first();
		$meta		=DB::table('siteayar')->where('dil', '=', 'fr')->first();
		$haberler	=DB::table('haberler')->where('haberdil', '=', 'fr')->where('anasayfa', '=', '1')->take(3)->get();

		return view('tema.'.$this->tema.'.index',compact('meta','user','duyuru','haberler','x','referans','video',
			'ref','sip','galeri','galeriyazi','urun','slider','yazi','menucek','genelayar','duyurusorgu','dil','ekalan'));
	}

}
