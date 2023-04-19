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
use App\Iletisim;
use App\Galeri;
use App\Galeriresim;
use Input;
use Redirect;
use App\Helper;
use Mail;
class GalleryDetailController extends Controller {
	    //Galeri detay sayfası içerikleri
     public function trgaleriicerik($id,$galerislug){
     	$galeri 		=Galeri::where('id','=',$id)->first();
     	$metatitle	=$galeri->galeribaslik;
     	$metadesc	    =$galeri->galeridesc;
     	$metakeyw	    =$galeri->galerietiket;
     	//$kategoriurun 		=Urunler::orderByRaw("RAND()")->take(3)->get();
     	$galeriresimleri	=Galeriresim::where('galeriid','=',$galeri->id)->get();
     	return view('tema.'.$this->tema.'.gallerydetail',compact('galeri','metatitle','metakeyw','metadesc','geridon',
     		'sayfaadi','galeriresimleri','kategoriurun'));

     }
      //Galeri detay sayfası içerikleri
     public function engaleriicerik($id,$galerislug){
          $galeri        =Galeri::where('id','=',$id)->where('galeridil','=','en')->first();
          $metatitle     =$galeri->galeribaslik;
          $metadesc      =$galeri->galeridesc;
          $metakeyw      =$galeri->galerietiket;
          //$kategoriurun          =Urunler::orderByRaw("RAND()")->take(3)->get();
          $galeriresimleri    =Galeriresim::where('galeriid','=',$galeri->id)->get();
          return view('tema.'.$this->tema.'.gallerydetail',compact('galeri','metatitle','metakeyw','metadesc','geridon',
               'sayfaadi','galeriresimleri','kategoriurun'));

     }
           //Galeri detay sayfası içerikleri
     public function degaleriicerik($id,$galerislug){
          $galeri        =Galeri::where('id','=',$id)->where('galeridil','=','de')->first();
          $metatitle     =$galeri->galeribaslik;
          $metadesc      =$galeri->galeridesc;
          $metakeyw      =$galeri->galerietiket;
          //$kategoriurun          =Urunler::orderByRaw("RAND()")->take(3)->get();
          $galeriresimleri    =Galeriresim::where('galeriid','=',$galeri->id)->get();
          return view('tema.'.$this->tema.'.gallerydetail',compact('galeri','metatitle','metakeyw','metadesc','geridon',
               'sayfaadi','galeriresimleri','kategoriurun'));

     }
                //Galeri detay sayfası içerikleri
     public function frgaleriicerik($id,$galerislug){
          $galeri        =Galeri::where('id','=',$id)->where('galeridil','=','fr')->first();
          $metatitle     =$galeri->galeribaslik;
          $metadesc      =$galeri->galeridesc;
          $metakeyw      =$galeri->galerietiket;
          //$kategoriurun          =Urunler::orderByRaw("RAND()")->take(3)->get();
          $galeriresimleri    =Galeriresim::where('galeriid','=',$galeri->id)->get();
          return view('tema.'.$this->tema.'.gallerydetail',compact('galeri','metatitle','metakeyw','metadesc','geridon',
               'sayfaadi','galeriresimleri','kategoriurun'));

     }

}