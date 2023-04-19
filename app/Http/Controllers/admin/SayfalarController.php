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
use App\Sayfalar;
use App\Moduller;
class SayfalarController extends Controller {
    //sayfa ekleme kısmı form
    public function sayfakayit(){
        $sayfa  =Sayfalar::orderBy('sayfadil', 'desc')->get();
        $modul  =Moduller::all();
       return  view('admin.sayfalar',['sayfa'=>$sayfa,'modul'=>$modul]);
    }
    //sayfa post kaydı yapıyoruz gelen veriyi kayıt
    public function sayfapost(){
        $sayfa=new Sayfalar;
        $sayfa->durum           =Input::get('durum');
        $sayfa->katid           =Input::get('kat');
        $sayfa->sayfadil        =Input::get('dil');
        $sayfa->sayfaurl        =Str::slug(Input::get('sayfaadi'));
        $sayfa->modulid         =Input::get('modulid');
        $sayfa->sayfaadi        =Input::get('sayfaadi');
        $sayfa->sayfaicerik     =Input::get('sayfaicerik');
        $sayfa->sayfakeyw       =Input::get('sayfakeyw');
        $sayfa->sayfadesc       =Input::get('sayfadesc');
        $sayfa->sira            =Input::get('sira');
        $sayfa->save();
        if($sayfa->save()){
            return Redirect::back()->with(array('mesaj'=>'Sayfa başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Sayfa kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //sayfaların listesi ve düzenleme kısmı
    public function sayfaduzen(){
        $sayfa      =Sayfalar::orderBy('sayfadil', 'desc')->paginate(15);
        $sayfasay   =Sayfalar::all()->count();
        return View('admin.sayfaduzen',array('sayfa'=>$sayfa,'sayfasay'=>$sayfasay));
    }
    //sayfa düzenleme formu
    public function sayfaduzenlekayit($id){
        $sayfa       =Sayfalar::find($id);
        $kategori    =Sayfalar::orderBy('sayfadil', 'desc')->get();
        $modul       =Moduller::all();
        return  view('admin.sayfaduzenle',['sayfa'=>$sayfa,'kategori'=>$kategori,'modul'=>$modul]);
    }
    //sayfa düzenleme kısmından gelen veriyi kayıt edelim
    public function sayfaduzenlekayitla($id){
        $sayfa=Sayfalar::find($id);
        $sayfa->durum           =Input::get('durum');
        $sayfa->katid           =Input::get('kat');
        $sayfa->sayfadil        =Input::get('dil');
        $sayfa->sayfaadi        =Input::get('sayfaadi');
        $sayfa->modulid        =Input::get('modulid');
        $sayfa->sayfaurl        =Str::slug(Input::get('sayfaadi'));
        $sayfa->sayfaicerik     =Input::get('sayfaicerik');
        $sayfa->sayfakeyw       =Input::get('sayfakeyw');
        $sayfa->sayfadesc       =Input::get('sayfadesc');
        $sayfa->sira             =Input::get('sira');
        $sayfa->save();
        if($sayfa->save()){
            return Redirect::back()->with(array('mesaj'=>'Sayfa başarıyla düzenlendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Sayfa kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //sayfa silme 
    public function sayfasil($id){
        $sorgulaust     =Sayfalar::where('katid','=',$id)->get();
        if(count($sorgulaust)){
            return Redirect::back()->with(array('mesaj'=>'Sayfa Kategorisi silinemez önce kategoriye ait alt kategori ve içerikleri siliniz.','type'=>'error'));
        }else{
            $sayfa  =Sayfalar::find($id);
            $sayfa->delete();
            if(!$sayfa->delete()){
                return Redirect::back()->with(array('mesaj'=>'Sayfa başarıyla silindi!.','type'=>'success'));
            }else{
                return Redirect::back()->with(array('mesaj'=>'Sayfa silinemedi bir problem mevcut!.','type'=>'error'));
            }
        }
    }
        //sayfa sırası kayıt modal ile
    public function modalsayfakayit($id){
            $slider=Sayfalar::find($id);
            $slider->sira          =Input::get('sira');
            $slider->save();
            if($slider->save()){
                return Redirect::back()->with(array('mesaj'=>'Sayfa sırası başarıyla kaydedildi!.','type'=>'success'));
            }else{
                return Redirect::back()->with(array('mesaj'=>'Sayfa sırası kaydedilemedi bir problem mevcut!.','type'=>'error'));
            }
    }
}
