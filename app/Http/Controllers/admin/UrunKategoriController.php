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
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;
use ImageManager;
use App\Sayfalar;
use App\Urunler;
class UrunKategoriController extends Controller {
    //ana kısım ilk ekran
    public function urunkat(){
        $urunkat   =Sayfalar::where('modulid','=','5')->paginate(5);
        $katkac        =Sayfalar::where('modulid','=','5')->count();
        return  view('admin.urunkategori',compact('urunkat','katkac'));
    }
    //urun kategori formu kayıt ekleme kısmı
    public function urunkatkayit(){
        $ukat=new Sayfalar;
        $ukat->sayfaadi         =Input::get('urunkatadi');
        $ukat->sayfadil         =Input::get('urunkatdil');
        $ukat->katid            =Input::get('ukatid');
        $ukat->sayfadesc        =Input::get('urundesc');
        $ukat->sayfakeyw        =Input::get('urunkeyw');
        $ukat->sayfaurl         =Str::slug(Input::get('urunkatadi'));
        $ukat->modulid          ="5";
        $ukat->save();
        if($ukat->save()){
            return Redirect::back()->with(array('mesaj'=>'Ürün Kategorisi başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Ürün Kategorisi kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //ürün kategori düzenleme formu
    public function urunkatduzen($id){
        $ukat        =Sayfalar::find($id);
        $urunkat     =Sayfalar::where('modulid','=','5')->get();
        return  view('admin.urunkatduzen',compact('ukat','urunkat'));
    }

    //urun kategori formu kayıt ekleme kısmı
    public function urunkatduzenle($id){
        $ukat=Sayfalar::find($id);
        $ukat->sayfaadi         =Input::get('urunkatadi');
        $ukat->sayfadil         =Input::get('urunkatdil');
        $ukat->katid            =Input::get('ukatid');
        $ukat->sayfadesc        =Input::get('urundesc');
        $ukat->sayfakeyw        =Input::get('sayfakeyw');
        $ukat->modulid          ="5";
        $ukat->sayfaurl        =Str::slug(Input::get('urunkatadi'));
        $ukat->save();
        if($ukat->save()){
            return Redirect::to('yonetim/urunkategori')->with(array('mesaj'=>'Ürün Kategorisi başarıyla duzenlendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Ürün Kategorisi kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    public function urunkatsil($id){
        $sorgula        =Urunler::where('urunkatid','=',$id)->get();
        $sorgulaust     =Sayfalar::where('katid','=',$id)->get();
        if(count($sorgula)){
            return Redirect::back()->with(array('mesaj'=>'Ürün Kategorisi silinemez önce kategoriye ait tüm içerikleri siliniz.','type'=>'error'));
        }elseif(count($sorgulaust)){
            return Redirect::back()->with(array('mesaj'=>'Ürün Kategorisi ile ilişkili alt kategoriler bulunuyor öncelikle bunları siliniz.','type'=>'error'));
        }else{
            $sayfa  =Sayfalar::find($id);
            $sayfa->delete();
            if(!$sayfa->delete()){
                return Redirect::back()->with(array('mesaj'=>'Ürün kategorisi başarıyla silindi!.','type'=>'success'));
            }else{
                return Redirect::back()->with(array('mesaj'=>'Ürün kategorisi silinemedi bir problem mevcut!.','type'=>'error'));
            }
        }
    }
}
