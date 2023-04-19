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
use Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;
use ImageManager;
use Request;
use App\Siparisler;
use App\Urunler;
use App\Moduller;
use App\UrunKategori;
use DB;
    $modul=DB::table('moduller')->where('id', '2')->first();
    if($modul->durum==1){
class SiparislerController extends Controller {
  
    //ana kısım ilk ekran
    public function siparisgor(){
        $sipariskat   =Urunler::get();
        $siparis          =Siparisler::paginate(9);
        $sipariskac       =Siparisler::all()->count();
       return  view('admin.siparisliste',compact('siparis','sipariskac','sipariskat'));
    }
    //sipariş silme işlemi
    public function siparissil($id){
        $sayfa  =Siparisler::find($id);
        $sayfa->delete();
        if(!$sayfa->delete()){
            return Redirect::back()->with(array('mesaj'=>'Siparişiniz başarıyla silindi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Sipariş silinemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //siparis durumu güncelleme sadece durum
    public function siparisduzen($id){
        $siparis                =Siparisler::find($id);
        $siparis->durum          =Input::get('durum');
        $siparis->save();
        if($siparis->save()){
            return Redirect::back()->with(array('mesaj'=>'Sipariş durumu başarıyla güncellendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Sipariş güncellenmedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //siparis düzenleme kısmı
    public function siparisduzenle($id){
        $siparis                =Siparisler::find($id);
        return  view('admin.siparisduzenle',compact('siparis'));
    }
    //siparis durumu güncelleme
    public function siparisduzenkayit($id){
        $siparis                =Siparisler::find($id);
        $siparis->durum          =Input::get('durum');
        $siparis->adet          =Input::get('adet');
        $siparis->fiyat          =Input::get('fiyat');
        $siparis->urunadi          =Input::get('urunadi');
        $siparis->adunvan          =Input::get('adunvan');
        $siparis->email          =Input::get('email');
        $siparis->adres          =Input::get('adres');
        $siparis->telefon          =Input::get('telefon');
        $siparis->urunadi          =Input::get('mesaj');
        $siparis->save();
        if($siparis->save()){
            return Redirect::back()->with(array('mesaj'=>'Sipariş başarıyla güncellendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Sipariş güncellenmedi bir problem mevcut!.','type'=>'error'));
        }
    }
    
}
}else { echo "Not : Modül kapalı olduğu işlevlerinin tümü devre dışıdır.Lütfen Modülü aktif edip deneyiniz.";}