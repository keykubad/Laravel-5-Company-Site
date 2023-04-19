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
use Route;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;
use ImageManager;
use Request;
use App\Slider;
use DB;
    $modul=DB::table('moduller')->where('id', '10')->first();
    if($modul->durum==1){
class SliderController extends Controller {
    //ana kısım ilk ekran
    public function banner(){
        $slider      =Slider::paginate(5);
        $sliderkac   =Slider::all()->count();
       return  view('admin.slider',compact('slider','sliderkac'));
    }
    //referans formu kayıt ekleme kısmı
    public function bannerkayit(){
        $slider=new Slider;
        $slider->slideryazi          =Input::get('slideryazi');
        $slider->sliderdil           =Input::get('sliderdil');
        $slider->slidersira          =Input::get('slidersira');
        if (Input::hasFile('sliderresim')) {
            File::delete('resimler/slider/'.$slider->sliderresim.'');
            $resim = Input::file('sliderresim');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/slider/', $isim);
            $image = Image::make('resimler/slider/' . $isim)->resize($this->sliderboyut->yukseklik, $this->sliderboyut->genislik)->save();
            $slider->sliderresim = $isim;
            $slider->save();
        }
        $slider->save();
        if($slider->save()){
            return Redirect::back()->with(array('mesaj'=>'Slider başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Slider kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //ana kısım ilk ekran
    public function slidergor($id){
        $slider   =Slider::find($id);
        return  view('admin.sliderduzen',compact('slider'));
    }
    //referans formu kayıt ekleme kısmı
    public function modalkayit($id){
        $slider=Slider::find($id);
        $slider->slidersira          =Input::get('slidersira');
        $slider->save();
        if($slider->save()){
            return Redirect::back()->with(array('mesaj'=>'Slider sırası başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Slider sırası kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //referans formu kayıt ekleme kısmı
    public function bannerkayitla($id){
        $slider=Slider::find($id);
        $slider->slideryazi          =Input::get('slideryazi');
        $slider->sliderdil           =Input::get('sliderdil');
        $slider->slidersira          =Input::get('slidersira');
        if (Input::hasFile('sliderresim')) {
            File::delete('resimler/slider/'.$slider->sliderresim.'');
            $resim = Input::file('sliderresim');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/slider/', $isim);
            $image = Image::make('resimler/slider/' . $isim)->resize($this->sliderboyut->yukseklik, $this->sliderboyut->genislik)->save();
            $slider->sliderresim = $isim;
            $slider->save();
        }
        $slider->save();
        if($slider->save()){
            return Redirect::back()->with(array('mesaj'=>'Slider başarıyla düzenlendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Slider kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    public function slidersil($id){
        $sayfa  =Slider::find($id);
        $sayfa->delete();
        if(!$sayfa->delete()){
            return Redirect::back()->with(array('mesaj'=>'Slider başarıyla silindi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Slider silinemedi bir problem mevcut!.','type'=>'error'));
        }
    }
}
}else { echo "Not : Modül kapalı olduğu işlevlerinin tümü devre dışıdır.Lütfen Modülü aktif edip deneyiniz.";}