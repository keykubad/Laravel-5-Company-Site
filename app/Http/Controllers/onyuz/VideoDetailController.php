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
use App\Video;
use Input;
use Redirect;
use App\Helper;
use Mail;
class VideoDetailController extends Controller {
	    //Video detay sayfası içerikleri
     public function trvideoicerik($id,$videoslug){
     	$video 		=Video::where('id','=',$id)->first();
         
     	$metatitle	=$video->videoadi;
     	$metadesc	     =$video->videodesc;
     	$metakeyw	     =$video->videokeyw;
     	return view('tema.'.$this->tema.'.videodetail',compact('video','metatitle','metakeyw','metadesc','geridon',
     		'sayfaadi','galeriresimleri'));

     }
     	    //Video detay sayfası içerikleri
     public function envideoicerik($id,$videoslug){
     	$video 		=Video::where('videodil','=','en')->where('id','=',$id)->first();
         
     	$metatitle	=$video->videoadi;
     	$metadesc	     =$video->videodesc;
     	$metakeyw	     =$video->videokeyw;
     	return view('tema.'.$this->tema.'.videodetail',compact('video','metatitle','metakeyw','metadesc','geridon',
     		'sayfaadi','galeriresimleri'));

     }
          	    //Video detay sayfası içerikleri
     public function devideoicerik($id,$videoslug){
     	$video 		=Video::where('videodil','=','de')->where('id','=',$id)->first();
         
     	$metatitle	=$video->videoadi;
     	$metadesc	     =$video->videodesc;
     	$metakeyw	     =$video->videokeyw;
     	return view('tema.'.$this->tema.'.videodetail',compact('video','metatitle','metakeyw','metadesc','geridon',
     		'sayfaadi','galeriresimleri'));

     }
          	    //Video detay sayfası içerikleri
     public function frvideoicerik($id,$videoslug){
     	$video 		=Video::where('videodil','=','fr')->where('id','=',$id)->first();
         
     	$metatitle	=$video->videoadi;
     	$metadesc	     =$video->videodesc;
     	$metakeyw	     =$video->videokeyw;
     	return view('tema.'.$this->tema.'.videodetail',compact('video','metatitle','metakeyw','metadesc','geridon',
     		'sayfaadi','galeriresimleri'));

     }

}