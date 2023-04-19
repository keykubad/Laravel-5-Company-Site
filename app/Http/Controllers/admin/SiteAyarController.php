<?php namespace App\Http\Controllers\admin;
/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */
use Auth;
use Redirect;
use Hash;
use Input;
use File;
use Image;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;
use ImageManager;
use App\SiteAyar;
class SiteAyarController extends Controller {
    //ana kısım ilk ekran
    public function genel(){
       return  view('admin.siteayar');
    }
    //Site ayarlarını kaydetme kısmı posttan gelen veriyi kaydediyoruz
    public function genelkayit(){
        $siteayari               = new SiteAyar;
        $siteayari->durum        = Input::get('durum');
        $siteayari->dil           = Input::get('dil');
        $siteayari->siteadi      = Input::get('siteadi');
        $siteayari->sitekeyw     = Input::get('sitekeyword');
        $siteayari->sitedesc     = Input::get('sitedesc');
        $siteayari->sitetel     = Input::get('sitetel');
        $siteayari->siteadres     = Input::get('siteadres');
        $siteayari->save();
        if($siteayari->save()){
            return Redirect::back()->with(array('mesaj'=>'Site ayarları başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Site ayarları kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //Site ayarları düzenleme listesi
    public function siteliste(){
        $site        =SiteAyar::all();
        $siteayarsay = SiteAyar::all()->count();
        return  view('admin.siteduzen',array('site'=>$site,'siteayarsay'=>$siteayarsay));
    }
    //Site ayarları verisini ekrana basma
    public function sitelistebas($id){
        $siteayari   =SiteAyar::find($id);
        return  view('admin.siteayarduzen',compact('siteayari'));
    }
    //Site ayarları düzenleme kayıt
    public function siteduzen($id){
        $siteayari               = Siteayar::find($id);
        $siteayari->durum        = Input::get('durum');
        $siteayari->dil          = Input::get('dil');
        $siteayari->siteadi      = Input::get('siteadi');
        $siteayari->sitekeyw     = Input::get('sitekeyword');
        $siteayari->sitedesc     = Input::get('sitedesc');
        $siteayari->sitetel     = Input::get('sitetel');
        $siteayari->siteadres     = Input::get('siteadres');
        $siteayari->save();
        if($siteayari->save()){
            return Redirect::back()->with(array('mesaj'=>'Site ayarları başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Site ayarları kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    public function siteayarsil($id){
        $sayfa  =SiteAyar::find($id);
        $sayfa->delete();
        if(!$sayfa->delete()){
            return Redirect::back()->with(array('mesaj'=>'Site ayarı başarıyla silindi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Site ayarı silinemedi bir problem mevcut!.','type'=>'error'));
        }
    }
}
