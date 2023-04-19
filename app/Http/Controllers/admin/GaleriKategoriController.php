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
use App\Galeri;

class GaleriKategoriController extends Controller {
    //ana kısım ilk ekran
    public function galerikat(){
        $galerikat   =Sayfalar::where('modulid','=','6')->paginate(5);
        $katkac        =Sayfalar::where('modulid','=','6')->count();
        return  view('admin.galerikategori',compact('galerikat','katkac'));
    }
    //galeri kategori formu kayıt ekleme kısmı
    public function galerikatkayit(){
        $ukat=new Sayfalar;
        $ukat->katid                =Input::get('galkatid');
        $ukat->sayfadil             =Input::get('galerikatdil');
        $ukat->sayfaurl             =Str::slug(Input::get('galerikatadi'));
        $ukat->sayfaadi             =Input::get('galerikatadi');
        $ukat->sayfadesc             =Input::get('galeridesc');
        $ukat->sayfakeyw            =Input::get('galerikeyw');
        $ukat->modulid              ="6";
        $ukat->save();
        if($ukat->save()){
            return Redirect::back()->with(array('mesaj'=>'Galeri Kategorisi başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Galeri Kategorisi kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //galeri kategori düzenleme formu
    public function galerikatduzen($id){
        $ukat        =Sayfalar::find($id);
        $galerikat     =Sayfalar::where('modulid','=','6')->get();
        return  view('admin.galerikatduzen',compact('ukat','galerikat'));
    }
    //galeri kategori formu kayıt ekleme kısmı
    public function galerikatduzenle($id){
        $ukat=Sayfalar::find($id);
        $ukat->katid                =Input::get('galkatid');
        $ukat->sayfadil             =Input::get('galerikatdil');
        $ukat->sayfaurl             =Str::slug(Input::get('galerikatadi'));
        $ukat->sayfaadi             =Input::get('galerikatadi');
        $ukat->sayfadesc             =Input::get('galeridesc');
        $ukat->sayfakeyw            =Input::get('galerikeyw');
        $ukat->modulid              ="6";
        $ukat->save();
        if($ukat->save()){
            return Redirect::back()->with(array('mesaj'=>'Galeri Kategorisi başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Galeri Kategorisi kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
        //galeri kategori silme işlemi
    public function galerikatsil($id){
        $sorgula    =Galeri::where('galerikatid','=',$id)->get();
        if(count($sorgula)){
                return Redirect::back()->with(array('mesaj'=>'Galeri Kategorisi silinemez önce kategoriye ait tüm içerikleri siliniz.','type'=>'error'));
        }else{
            $sayfa  =Sayfalar::find($id);
            $sayfa->delete();
            if(!$sayfa->delete()){
                return Redirect::back()->with(array('mesaj'=>'Galeri Kategorisi başarıyla silindi!.','type'=>'success'));
            }else{
                return Redirect::back()->with(array('mesaj'=>'Galeri Kategorisi silinemedi bir problem mevcut!.','type'=>'error'));
            }
        }
    }
  
}
