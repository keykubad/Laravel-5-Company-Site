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
use App\GenelAyar;
use App\Mailler;
use App\Moduller;
use Cache;
class GenelAyarController extends Controller {
    //ana kısım ilk ekran
    public function sabit(){
        $ref        =Moduller::find(1);
        $gal        =Moduller::find(6);
        $logo       =Moduller::find(9);
        $haber      =Moduller::find(7);
        $slider     =Moduller::find(10);
        $urun       =Moduller::find(5);
        $video      =Moduller::find(4);
        $sabit      =GenelAyar::find(1);
       return  view('admin.sabitayar',compact('sabit','ref','gal','logo','haber','slider','urun','video'));
    }
    //Site ayarlarını kaydetme kısmı posttan gelen veriyi kaydediyoruz
    public function sabitkayit(){
        //resim boyutlarını kayıt ediyoruz
        $ref        =Moduller::find(1);
        $ref->yukseklik =Input::get('refyukseklik');
        $ref->genislik  =Input::get('refgenislik');
        $ref->save();
        $gal        =Moduller::find(6);
        $gal->yukseklik =Input::get('galyukseklik');
        $gal->genislik  =Input::get('galgenislik');
        $gal->save();
        $logo       =Moduller::find(9);
        $logo->yukseklik =Input::get('logoyukseklik');
        $logo->genislik  =Input::get('logogenislik');
        $logo->save();
        $haber      =Moduller::find(7);
        $haber->yukseklik =Input::get('haberyukseklik');
        $haber->genislik  =Input::get('habergenislik');
        $haber->save();
        $slider     =Moduller::find(10);
        $slider->yukseklik =Input::get('slideryukseklik');
        $slider->genislik  =Input::get('slidergenislik');
        $slider->save();
        $urun       =Moduller::find(5);
        $urun->yukseklik =Input::get('urunyukseklik');
        $urun->genislik  =Input::get('urungenislik');
        $urun->save();
        $video      =Moduller::find(4);
        $video->yukseklik =Input::get('videoyukseklik');
        $video->genislik  =Input::get('videogenislik');
        $video->save();


        $siteayari               = GenelAyar::find(1);
        $siteayari->sitesosyal   = Input::get('sitesosyal');
        $siteayari->cachedurum   = Input::get('cachedurum');
        $siteayari->sitegooglemap= Input::get('sitegooglemap');
        $siteayari->siteanaliz   = Input::get('siteanaliz');
        if (Input::hasFile('logo')) {
            File::delete('resimler/'.$siteayari->sitelogo.'');
            $resim = Input::file('logo');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/', $isim);
            $image = Image::make('resimler/' . $isim)->resize($this->logoboyut->yukseklik, $this->logoboyut->genislik)->save();
            $siteayari->sitelogo = $isim;
            $siteayari->save();
        }
        $siteayari->save();
        if($siteayari->save()){
            return Redirect::back()->with(array('mesaj'=>'Sabit ayarlar başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Sabit ayarlar kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //Mail listesi kısmı
    public function maillist(){
       $mail      =Mailler::paginate(20);
       $mailkac   =Mailler::all()->count();
       $mailtum   =Mailler::all();
       return  view('admin.mailler',compact('mail','mailkac','mailtum')); 

    }
        //Mail silme işlemi
    public function mailsil($id){
        $sayfa  =Mailler::find($id);
        $sayfa->delete();
        if(!$sayfa->delete()){
            return Redirect::back()->with(array('mesaj'=>'Mail adresi başarıyla silindi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Mail adresi silinemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    public function onbelleksil(){
        $sil=Cache::forget('cache');
        $sil=Cache::flush();
        if(!$sil){
            return Redirect::back()->with(array('mesaj'=>'Tüm Sitenin önbelleği temizlendi.Tekrar önbellekleme başlayacaktır!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Önbellek temizlenemedi bir problem mevcut!.','type'=>'error'));
        }
    }


}
