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
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;
use ImageManager;
use Request;
use App\EkstraAlan;
use App\Moduller;
use DB;
class EkstraAlanController extends Controller {
    //ana kısım ilk ekran
    public function ekstraalan(){
        $ekstra      	  =EkstraAlan::paginate(5);
        $ekstrakac        =EkstraAlan::all()->count();
       return  view('admin.ekstraalan',compact('ekstra','ekstrakac'));
    }
     //ekstra alan formu kayıt ekleme kısmı
    public function ekstrakayit(){
        $ek=new EkstraAlan;
        $ek->adi       =Input::get('adi');
        $ek->dil       =Input::get('dil');
        $ek->durum     =Input::get('durum');
        $ek->alan      =Input::get('icerik');
        $ek->save();
        if($ek->save()){
            return Redirect::back()->with(array('mesaj'=>'Ekstra alan başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Ekstra alan kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
        //duyuru düzenleme formu
    public function ekalangor($id){
        $ek        =EkstraAlan::find($id);
        return  view('admin.ekstralanduzenle',compact('ek'));
    }
    //ekstra alan düzenleme formu kayıt
     public function ekstraduzen($id){
        $ek=EkstraAlan::find($id);
        $ek->adi       =Input::get('adi');
        $ek->dil       =Input::get('dil');
        $ek->durum     =Input::get('durum');
        $ek->alan      =Input::get('icerik');
        $ek->save();
        if($ek->save()){
            return Redirect::back()->with(array('mesaj'=>'Ekstra alan başarıyla düzenlendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Ekstra alan kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //ekstra alan silme işlemi
    public function eksil($id){
        $sayfa  =EkstraAlan::find($id);
        $sayfa->delete();
        if(!$sayfa->delete()){
            return Redirect::back()->with(array('mesaj'=>'Ekstra Alan başarıyla silindi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Ekstra Alan silinemedi bir problem mevcut!.','type'=>'error'));
        }
    }
}