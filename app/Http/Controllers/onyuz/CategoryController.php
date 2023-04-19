<?php namespace App\Http\Controllers\onyuz;
/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */
use DB;
use Request;
use App\Sayfalar;
use App\SiteAyar;
use App\User;
use App\GenelAyar;
use App\Haberler;
use App\Galeri;
use App\Urunler;
use App\Duyurular;
use Input;
use App\Helper;
use Carbon\Carbon;
use App\Video;
class CategoryController extends Controller {
	public function category($sayfaurl,$katid){
		$sayfa=Sayfalar::where('id','=',$katid)->first();
				$metatitle	=	$sayfa->sayfaadi;
				$metakeyw	=	$sayfa->sayfakeyw;
				$metadesc	=	$sayfa->sayfadesc;

	/*MODULLERİ BURADA KONTROL EDİYORUZ*/
				//modulid 6 galeri
		if($sayfa->modulid==6){
			$galeri			=Galeri::where('galerikatid','=',$katid)->where('galeridil', 'tr')->paginate(12);
			
					if(count($galeri)==0){	
						$galeri			=Galeri::where('galeridil', 'tr')->paginate(12);
						return view('tema.'.$this->tema.'.gallerylist',compact('galeri','metatitle','metakeyw','metadesc','sayfa'));
					}else{
						
						return view('tema.'.$this->tema.'.gallerylist',compact('galeri','metatitle','metakeyw','metadesc','sayfa'));
					}
			//urunler kısmı modulid 5
		}elseif($sayfa->modulid==5){
			$urun			=Urunler::where('urunkatid','=',$katid)->where('urundil', 'tr')->paginate(6);
			$sayfaurun=Sayfalar::where('katid','=',$katid)->where('sayfadil','=','tr')->get();
					if(count($urun)==0){
						$urun			=Urunler::where('urundil', 'tr')->paginate(6);
						return view('tema.'.$this->tema.'.productspage',compact('urun','metatitle','metakeyw','metadesc','sayfaurun','sayfa'));
					}else{
						return view('tema.'.$this->tema.'.productspage',compact('urun','metatitle','metakeyw','metadesc','sayfa','sayfaurun'));
					}
			//duyurular modulid 3
		}elseif($sayfa->modulid==3){
			$duyuru			=Duyurular::where('duyurudil', 'tr')->paginate(6);
			return view('tema.'.$this->tema.'.anons',compact('metatitle','metakeyw','metadesc','sayfa','duyuru'));
		   //Haberler modül id 7
		}elseif($sayfa->modulid==7){
			$haber			=Haberler::where('haberdil', 'tr')->simplePaginate(3);
			$haberson			=Haberler::where('haberdil', 'tr')->orderBy('id','desc')->take(5)->get();
			return view('tema.'.$this->tema.'.haberlerliste',compact('metatitle','metakeyw','metadesc','sayfa','haber','haberson'));
		  //Videolar modulid 4
		}elseif($sayfa->modulid==4){
			$video			=Video::where('videodil', 'tr')->paginate(10);
			return view('tema.'.$this->tema.'.videoliste',compact('metatitle','metakeyw','metadesc','sayfa','video'));
		  //İletişim modulid 8
		}elseif($sayfa->modulid==8){
			return view('tema.'.$this->tema.'.contact',compact('metatitle','metakeyw','metadesc','sayfa','video'));
		//İnsan Kaynakları formu
		}elseif($sayfa->modulid==11){
			return view('tema.'.$this->tema.'.insankaynaklari',compact('metatitle','metakeyw','metadesc','sayfa','video'));

		}
	/*MODULLERİ BURADA KONTROL EDİYORUZ*/
	}
	/*INGILIZCE*/
	public function encategory($sayfaurl,$katid){
		$sayfa=Sayfalar::where('id','=',$katid)->first();
				$metatitle	=	$sayfa->sayfaadi;
				$metakeyw	=	$sayfa->sayfakeyw;
				$metadesc	=	$sayfa->sayfadesc;

	/*MODULLERİ BURADA KONTROL EDİYORUZ*/
				//modulid 6 galeri
		if($sayfa->modulid==6){
			$galeri			=Galeri::where('galerikatid','=',$katid)->where('galeridil', 'en')->paginate(12);
			$sayfa=Sayfalar::where('katid','=',$katid)->get();
					if(count($galeri)==0){	
						$galeri			=Galeri::where('galeridil', 'en')->paginate(12);
						return view('tema.'.$this->tema.'.gallerylist',compact('galeri','metatitle','metakeyw','metadesc','sayfa'));
					}else{
						
						return view('tema.'.$this->tema.'.gallerylist',compact('galeri','metatitle','metakeyw','metadesc','sayfa'));
					}
			//urunler kısmı modulid 5
		}elseif($sayfa->modulid==5){
			$urun			=Urunler::where('urunkatid','=',$katid)->where('urundil', 'en')->paginate(6);
			$sayfaurun=Sayfalar::where('katid','=',$katid)->get();
					if(count($urun)==0){
						$urun			=Urunler::where('urundil', 'en')->paginate(6);
						return view('tema.'.$this->tema.'.productspage',compact('urun','metatitle','metakeyw','metadesc','sayfaurun','sayfa'));
					}else{
						return view('tema.'.$this->tema.'.productspage',compact('urun','metatitle','metakeyw','metadesc','sayfa','sayfaurun'));
					}
			//duyurular modulid 3
		}elseif($sayfa->modulid==3){
			$duyuru			=Duyurular::where('duyurudil', 'en')->paginate(6);
			return view('tema.'.$this->tema.'.anons',compact('metatitle','metakeyw','metadesc','sayfa','duyuru'));
		   //Haberler modül id 7
		}elseif($sayfa->modulid==7){
			$haber			=Haberler::where('haberdil', 'en')->paginate(10);
			return view('tema.'.$this->tema.'.haberlerliste',compact('metatitle','metakeyw','metadesc','sayfa','haber'));
		  //Videolar modulid 4
		}elseif($sayfa->modulid==4){
			$video			=Video::where('videodil', 'en')->paginate(10);
			return view('tema.'.$this->tema.'.videoliste',compact('metatitle','metakeyw','metadesc','sayfa','video'));
		  //İletişim modulid 8
		}elseif($sayfa->modulid==8){
			return view('tema.'.$this->tema.'.contact',compact('metatitle','metakeyw','metadesc','sayfa','video'));

		//İnsan Kaynakları formu
		}elseif($sayfa->modulid==11){
			return view('tema.'.$this->tema.'.insankaynaklari',compact('metatitle','metakeyw','metadesc','sayfa','video'));

		}
	/*MODULLERİ BURADA KONTROL EDİYORUZ*/
	}
	public function decategory($sayfaurl,$katid){
		$sayfa=Sayfalar::where('id','=',$katid)->first();
				$metatitle	=	$sayfa->sayfaadi;
				$metakeyw	=	$sayfa->sayfakeyw;
				$metadesc	=	$sayfa->sayfadesc;

	/*MODULLERİ BURADA KONTROL EDİYORUZ*/
				//modulid 6 galeri
		if($sayfa->modulid==6){
			$galeri			=Galeri::where('galerikatid','=',$katid)->where('galeridil', 'de')->paginate(12);
			$sayfa=Sayfalar::where('katid','=',$katid)->get();
					if(count($galeri)==0){	
						$galeri			=Galeri::where('galeridil', 'de')->paginate(12);
						return view('tema.'.$this->tema.'.gallerylist',compact('galeri','metatitle','metakeyw','metadesc','sayfa'));
					}else{
						
						return view('tema.'.$this->tema.'.gallerylist',compact('galeri','metatitle','metakeyw','metadesc','sayfa'));
					}
			//urunler kısmı modulid 5
		}elseif($sayfa->modulid==5){
			$urun			=Urunler::where('urunkatid','=',$katid)->where('urundil', 'de')->paginate(6);
			$sayfaurun=Sayfalar::where('katid','=',$katid)->get();
					if(count($urun)==0){
						$urun			=Urunler::where('urundil', 'de')->paginate(6);
						return view('tema.'.$this->tema.'.productspage',compact('urun','metatitle','metakeyw','metadesc','sayfaurun','sayfa'));
					}else{
						return view('tema.'.$this->tema.'.productspage',compact('urun','metatitle','metakeyw','metadesc','sayfa','sayfaurun'));
					}
			//duyurular modulid 3
		}elseif($sayfa->modulid==3){
			$duyuru			=Duyurular::where('duyurudil', 'de')->paginate(6);
			return view('tema.'.$this->tema.'.anons',compact('metatitle','metakeyw','metadesc','sayfa','duyuru'));
		   //Haberler modül id 7
		}elseif($sayfa->modulid==7){
			$haber			=Haberler::where('haberdil', 'de')->paginate(10);
			return view('tema.'.$this->tema.'.haberlerliste',compact('metatitle','metakeyw','metadesc','sayfa','haber'));
		  //Videolar modulid 4
		}elseif($sayfa->modulid==4){
			$video			=Video::where('videodil', 'de')->paginate(10);
			return view('tema.'.$this->tema.'.videoliste',compact('metatitle','metakeyw','metadesc','sayfa','video'));
		  //İletişim modulid 8
		}elseif($sayfa->modulid==8){
			return view('tema.'.$this->tema.'.contact',compact('metatitle','metakeyw','metadesc','sayfa','video'));

		//İnsan Kaynakları formu
		}elseif($sayfa->modulid==11){
			return view('tema.'.$this->tema.'.insankaynaklari',compact('metatitle','metakeyw','metadesc','sayfa','video'));

		}
	/*MODULLERİ BURADA KONTROL EDİYORUZ*/
	}
	public function frcategory($sayfaurl,$katid){
		$sayfa=Sayfalar::where('id','=',$katid)->first();
				$metatitle	=	$sayfa->sayfaadi;
				$metakeyw	=	$sayfa->sayfakeyw;
				$metadesc	=	$sayfa->sayfadesc;

	/*MODULLERİ BURADA KONTROL EDİYORUZ*/
				//modulid 6 galeri
		if($sayfa->modulid==6){
			$galeri			=Galeri::where('galerikatid','=',$katid)->where('galeridil', 'fr')->paginate(12);
			$sayfa=Sayfalar::where('katid','=',$katid)->get();
					if(count($galeri)==0){	
						$galeri			=Galeri::where('galeridil', 'fr')->paginate(12);
						return view('tema.'.$this->tema.'.gallerylist',compact('galeri','metatitle','metakeyw','metadesc','sayfa'));
					}else{
						
						return view('tema.'.$this->tema.'.gallerylist',compact('galeri','metatitle','metakeyw','metadesc','sayfa'));
					}
			//urunler kısmı modulid 5
		}elseif($sayfa->modulid==5){
			$urun			=Urunler::where('urunkatid','=',$katid)->where('urundil', 'fr')->paginate(6);
			$sayfaurun=Sayfalar::where('katid','=',$katid)->get();
					if(count($urun)==0){
						$urun			=Urunler::where('urundil', 'fr')->paginate(6);
						return view('tema.'.$this->tema.'.productspage',compact('urun','metatitle','metakeyw','metadesc','sayfaurun','sayfa'));
					}else{
						return view('tema.'.$this->tema.'.productspage',compact('urun','metatitle','metakeyw','metadesc','sayfa','sayfaurun'));
					}
			//duyurular modulid 3
		}elseif($sayfa->modulid==3){
			$duyuru			=Duyurular::where('duyurudil', 'fr')->paginate(6);
			return view('tema.'.$this->tema.'.anons',compact('metatitle','metakeyw','metadesc','sayfa','duyuru'));
		   //Haberler modül id 7
		}elseif($sayfa->modulid==7){
			$haber			=Haberler::where('haberdil', 'fr')->paginate(10);
			return view('tema.'.$this->tema.'.haberlerliste',compact('metatitle','metakeyw','metadesc','sayfa','haber'));
		  //Videolar modulid 4
		}elseif($sayfa->modulid==4){
			$video			=Video::where('videodil', 'fr')->paginate(10);
			return view('tema.'.$this->tema.'.videoliste',compact('metatitle','metakeyw','metadesc','sayfa','video'));
		  //İletişim modulid 8
		}elseif($sayfa->modulid==8){
			return view('tema.'.$this->tema.'.contact',compact('metatitle','metakeyw','metadesc','sayfa','video'));

		//İnsan Kaynakları formu
		}elseif($sayfa->modulid==11){
			return view('tema.'.$this->tema.'.insankaynaklari',compact('metatitle','metakeyw','metadesc','sayfa','video'));

		}
	/*MODULLERİ BURADA KONTROL EDİYORUZ*/
	}
}