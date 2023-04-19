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
use App\Referans;
use App\Moduller;
use DB;
    $modul=DB::table('moduller')->where('id', '1')->first();
    if($modul->durum==1){
class ReferansController extends Controller {
    
    
 
    //ana kısım ilk ekran
    public function referanslar(){
        $referans   =Referans::paginate(5);
        $refkac        =Referans::all()->count();
       return  view('admin.referans',compact('referans','refkac'));
    }
    //referans formu kayıt ekleme kısmı
    public function referanskayit(){
        $ref=new Referans;
        $ref->refbaslik          =Input::get('refbaslik');
        $ref->refslug            =Str::slug(Input::get('refbaslik'));
        $ref->refdil             =Input::get('refdil');
        $ref->reficerik          =Input::get('reficerik');
        $ref->refkeyw            =Input::get('refkeyw');
        $ref->refdesc            =Input::get('refdesc');
        if (Input::hasFile('refresim')) {
            File::delete('resimler/referans/'.$ref->refresim.'');
            $resim = Input::file('refresim');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/referans/', $isim);
            $image = Image::make('resimler/referans/' . $isim)->resize($this->refboyut->yukseklik, $this->refboyut->genislik)->save();
            $ref->refresim = $isim;
            $ref->save();
        }
        $ref->save();
        if($ref->save()){
            return Redirect::back()->with(array('mesaj'=>'Referans başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Referans kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //referans düzenleme formu
    public function referansbak($id){
        $refkac        =Referans::find($id);
        return  view('admin.referansduzenle',compact('refkac'));
    }
    //referans düzenleme formundan gelen veriyi kayıt etme
    public function referansduzenle($id){
        $ref=Referans::find($id);
        $ref->refbaslik          =Input::get('refbaslik');
        $ref->refdil             =Input::get('refdil');
        $ref->reficerik          =Input::get('reficerik');
        $ref->refslug            =Str::slug(Input::get('refbaslik'));
        $ref->refkeyw            =Input::get('refkeyw');
        $ref->refdesc            =Input::get('refdesc');
        if (Input::hasFile('refresim')) {
            File::delete('resimler/referans/'.$ref->refresim.'');
            $resim = Input::file('refresim');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/referans/', $isim);
            $image = Image::make('resimler/referans/' . $isim)->resize($this->refboyut->yukseklik, $this->refboyut->genislik)->save();
            $ref->refresim = $isim;
            $ref->save();
        }
        $ref->save();
        if($ref->save()){
            return Redirect::back()->with(array('mesaj'=>'Referans başarıyla düzenlendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Referans kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //duyuru silme işlemi
    public function referanssilme($id){
            $sayfa  =Referans::find($id);
            $sayfa->delete();
            if(!$sayfa->delete()){
                return Redirect::back()->with(array('mesaj'=>'Referans başarıyla silindi!.','type'=>'success'));
            }else{
                return Redirect::back()->with(array('mesaj'=>'Referans silinemedi bir problem mevcut!.','type'=>'error'));
            }
    }
    }
}else { echo "Not : Modül kapalı olduğu işlevlerinin tümü devre dışıdır.Lütfen Modülü aktif edip deneyiniz.";}
