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
use App\Haberler;
class HaberlerController extends Controller {
    //haber ekleme kısmı form
    public function haberform(){
        $haber  =Haberler::all();
       return  view('admin.haberekle',['haber'=>$haber]);
    }
    //haber formundan gelen veriyi kaydet
    public function haberkayit(){
        $haber               =new Haberler;
        $haber->haberdurum   = Input::get('haberdurum');
        $haber->haberdil        = Input::get('dil');
        $haber->haberbaslik     = Input::get('habbaslik');
        $haber->haberslug       = Str::slug(Input::get('habbaslik'));
        $haber->habericerik     = Input::get('habicerik');
        $haber->haberkeyw       = Input::get('habkeyw');
        $haber->haberdesc       = Input::get('habdesc');
        $haber->anasayfa        = Input::get('anasayfa');
        if (Input::hasFile('haberresim')) {
            File::delete('resimler/haber/'.$haber->haberresim.'');
            $resim = Input::file('haberresim');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/haber/', $isim);
            $image = Image::make('resimler/haber/' . $isim)->resize($this->haberboyut->yukseklik, $this->haberboyut->genislik)->save();
            $haber->haberresim = $isim;
            $haber->save();
        }
        $haber->save();
        if($haber->save()){
            return Redirect::back()->with(array('mesaj'=>'Haber başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Haber kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //Haber listesini ekrana basıyoruz
    public function haberliste(){
        $haber      =Haberler::paginate(15);
        $habersay   =Haberler::all()->count();
        return  view('admin.haberduzen',['haber'=>$haber,'habersay'=>$habersay]);
    }
    //Haber düzenleme kayıt formu
    public function haberduzenkaydi($id){
        $haber          =Haberler::find($id);
        $haberler       =Haberler::all();
        return  view('admin.haberduzenkayit',['haber'=>$haber,'haberler'=>$haberler]);
    }
    //Haber duzenlemeden gelen veriyi kayıt ediyoruz
    public function haberkayitla($id){
        $haber               =Haberler::find($id);
        $haber->haberdurum   = Input::get('haberdurum');
        $haber->haberdil        = Input::get('dil');
        $haber->haberbaslik     = Input::get('habbaslik');
        $haber->haberslug    = Str::slug(Input::get('habbaslik'));
        $haber->habericerik     = Input::get('habicerik');
        $haber->haberkeyw       = Input::get('habkeyw');
        $haber->haberdesc       = Input::get('habdesc');
        $haber->anasayfa        = Input::get('anasayfa');
        if (Input::hasFile('haberresim')) {
            File::delete('resimler/haber/'.$haber->haberresim.'');
            $resim = Input::file('haberresim');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/haber/', $isim);
            $image = Image::make('resimler/haber/' . $isim)->resize($this->haberboyut->yukseklik, $this->haberboyut->genislik)->save();
            $haber->haberresim = $isim;
            $haber->save();
        }
        $haber->save();
        if($haber->save()){
            return Redirect::back()->with(array('mesaj'=>'Haber başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Haber kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
        //İletişim mesajı silme
    public function habersilme($id){
        $sayfa  =Haberler::find($id);
        $sayfa->delete();
        if(!$sayfa->delete()){
            return Redirect::back()->with(array('mesaj'=>'Haber başarıyla silindi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Haber silinemedi bir problem mevcut!.','type'=>'error'));
        }
    }
}
