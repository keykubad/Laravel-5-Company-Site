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
use App\Duyurular;
use App\Moduller;
use DB;
    $modul=DB::table('moduller')->where('id', '3')->first();
    if($modul->durum==1){

class DuyurularController extends Controller {
    //ana kısım ilk ekran
    public function duyurular(){
            $duyuru        =Duyurular::paginate(5);
            $duyurukac        =Duyurular::all()->count();
            return  view('admin.duyurular',compact('duyuru','duyurukac'));
    }
    //duyuru formu kayıt ekleme kısmı
    public function duyurukayit(){
            $duy=new Duyurular;
            $duy->duyurubaslik       =Input::get('duyurubaslik');
            $duy->duyurudil          =Input::get('duyurudil');
            $duy->duyuruicerik       =Input::get('duyuruicerik');
            $duy->duyurukeyw         =Input::get('duyurukeyw');
            $duy->duyurudesc         =Input::get('duyurudesc');
            $duy->duyuruslug         =Str::slug(Input::get('duyurubaslik'));
            $duy->save();
            if($duy->save()){
                return Redirect::back()->with(array('mesaj'=>'Duyuru başarıyla kaydedildi!.','type'=>'success'));
            }else{
                return Redirect::back()->with(array('mesaj'=>'Duyuru kaydedilemedi bir problem mevcut!.','type'=>'error'));
            }
    }
    //duyuru düzenleme formu
    public function duyurugor($id){
        $duyuru        =Duyurular::find($id);
        return  view('admin.duyuruduzenle',compact('duyuru'));
    }
    //duyuru düzenleme formundan gelen veriyi kayıt etme
    public function duyuruduzenle($id){

            $duy=Duyurular::find($id);
            $duy->duyurubaslik       =Input::get('duyurubaslik');
            $duy->duyurudil          =Input::get('duyurudil');
            $duy->duyuruicerik       =Input::get('duyuruicerik');
            $duy->duyurukeyw         =Input::get('duyurukeyw');
            $duy->duyurudesc         =Input::get('duyurudesc');
            $duy->anasayfa              =Input::get('anasayfa');
            $duy->duyuruslug         =Str::slug(Input::get('duyurubaslik'));
            $duy->save();
            if($duy->save()){
                return Redirect::back()->with(array('mesaj'=>'Duyuru başarıyla düzenlendi!.','type'=>'success'));
            }else{
                return Redirect::back()->with(array('mesaj'=>'Duyuru kaydedilemedi bir problem mevcut!.','type'=>'error'));
            }
    }
    //duyuru silme işlemi
    public function duyurusil($id){
            $sayfa  =Duyurular::find($id);
            $sayfa->delete();
            if(!$sayfa->delete()){
                return Redirect::back()->with(array('mesaj'=>'Duyuru başarıyla silindi!.','type'=>'success'));
            }else{
                return Redirect::back()->with(array('mesaj'=>'Duyuru silinemedi bir problem mevcut!.','type'=>'error'));
            }
    }
}
}else { echo "Not : Modül kapalı olduğu işlevlerinin tümü devre dışıdır.Lütfen Modülü aktif edip deneyiniz.";}