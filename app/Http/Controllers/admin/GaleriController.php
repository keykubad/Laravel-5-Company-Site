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
use Validator;
use Session;
use App\Sayfalar;
use App\Galeri;
use App\Galeriresim;
use App\Moduller;
use DB;
    $modul=DB::table('moduller')->where('id', '6')->first();
    if($modul->durum==1){
class GaleriController extends Controller {
    //ana kısım ilk ekran
    public function galeriekle(){
        $galerikat   =Sayfalar::where('modulid','=','6')->get();
        return  view('admin.galeriekle',compact('galerikat'));
    }
    //galeri ekleme formu kayıt etme
    public function galerikayit(){
        $galeri                  =new Galeri;
        $galeri->galeribaslik          = Input::get('galeribaslik');
        $galeri->galerislug            = Str::slug(Input::get('galeribaslik'));
        $galeri->galerietiket          = Input::get('galerikeyw');
        $galeri->galeridesc            = Input::get('galeridesc');
        $galeri->galeriicerik          = Input::get('galeriicerik');
        $galeri->galeridil             = Input::get('galeridil');
        $galeri->galerikatid           = Input::get('galerikat');
        $galeri->anasayfa              = Input::get('anasayfa');
        if (Input::hasFile('galeriresim')) {
            File::delete('resimler/galeri/'.$galeri->galeriresim.'');
            $resim = Input::file('galeriresim');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/galeri/', $isim);
            $image = Image::make('resimler/galeri/' . $isim)->resize($this->galeriboyut->yukseklik, $this->galeriboyut->genislik)->save();
            $galeri->galeriresim = $isim;
            $galeri->save();
        }
        $galeri->save();
        if($galeri->save()){
            return Redirect::back()->with(array('mesaj'=>'Galeri Başarı ile eklendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Galeri eklenemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //çoklu galeri formu
    public function coklugaleriekle($id){
        $galeriler=Galeri::find($id);
        return  view('admin.coklugaleriekle',compact('galeriler'));
    }
    //galeri düzenleme menüsü
    public function galeriduzenleme($id){
        $galeri   =Galeri::find($id);
        $galerikat   =Sayfalar::where('modulid','=','6')->get();
        return  view('admin.galeriduzenleme',compact('galeri','galerikat'));
    }
    //galeri düzenleme formu kayıt etme
    public function galeriduzenlemekayit($id){
        $galeri                  =Galeri::find($id);
        $galeri->galeribaslik          = Input::get('galeribaslik');
        $galeri->galerislug            = Str::slug(Input::get('galeribaslik'));
        $galeri->galerietiket          = Input::get('galerikeyw');
        $galeri->galeridesc            = Input::get('galeridesc');
        $galeri->galeriicerik          = Input::get('galeriicerik');
        $galeri->galeridil             = Input::get('galeridil');
        $galeri->galerikatid           = Input::get('galerikat');
        if (Input::hasFile('galeriresim')) {
            File::delete('resimler/galeri/'.$galeri->galeriresim.'');
            $resim = Input::file('galeriresim');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/galeri/', $isim);
            $image = Image::make('resimler/galeri/' . $isim)->resize($this->galeriboyut->yukseklik, $this->galeriboyut->genislik)->save();
            $galeri->galeriresim = $isim;
            $galeri->save();
        }
        $galeri->save();
        if($galeri->save()){
            return Redirect::back()->with(array('mesaj'=>'Galeri Başarı ile düzenlendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Galeri düzenlenemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //çoklu galeri resmi ekleme kayıt
    public function modalgaleri($id){

        $files = Input::file('galeriresimler');

        $file_count = count($files);
        $uploadcount = 0;
        foreach($files as $file) {
            $rules = array('file' => 'required');
            $validator = Validator::make(array('file'=> $file), $rules);
            if($validator->passes()){
                $destinationPath = 'resimler/galeri/';
                $filename = $file->getClientOriginalName();
                $uzanti = $file->getClientOriginalExtension();
                $isim = Str::slug($filename) . Str::slug(str_random(5)) . '.' . $uzanti;
                $upload_success = $file->move($destinationPath, $isim);
                $image = Image::make('resimler/galeri/' . $isim)->resize($this->galeriboyut->yukseklik, $this->galeriboyut->genislik)->save();
                $file                 =new Galeriresim;
                $file->galeriid = $id;
                $file->galeriresimler = $isim;
                $file->save();
                $uploadcount ++;
            }

        }
        if($uploadcount == $file_count){
                return Redirect::back()->with(array('mesaj'=>'Galeri Resimleri Başarı ile eklendi!.','type'=>'success'));
        }
        else {
            return Redirect::back()->with(array('mesaj'=>'Galeri resimleri eklenemedi bir problem mevcut!.','type'=>'error'));
        }

    }

    //çoklu resim listesinden resim düzenleme kayıt kısmı
    public function coklugaleriresimkayit($id){
        $galeri   = Galeriresim::find($id);
        if (Input::hasFile('galeriimage')) {
            File::delete('resimler/galeri/'.$galeri->galeriresimler.'');
            $resim = Input::file('galeriimage');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/galeri/', $isim);
            $image = Image::make('resimler/galeri/' . $isim)->resize($this->galeriboyut->yukseklik, $this->galeriboyut->genislik)->save();
            $galeri->galeriresimler = $isim;
            $galeri->save();
        }
        $galeri->save();
        if($galeri->save()){
            return Redirect::back()->with(array('mesaj'=>'Galeri resimleri başarı ile düzenlendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Galeri resimleri düzenlenemedi bir problem mevcut!.','type'=>'error'));
        }
    }

    //galeri listesi formu
    public function galeriliste(){
        $galerikat   =Sayfalar::where('modulid','=','6')->get();
        $galerikac    =Sayfalar::where('modulid','=','6')->count();
        $galeri      =Galeri::paginate(9);
        return  view('admin.galeriduzen',compact('galeri','galerikat','galerikac'));
    }
    //çoklu galeri düzenleme listesi
    public function galericoklu($galeriid){
        $galeriresimler   =DB::table('galeriresim')->where('galeriid', $galeriid)->get();
        return  view('admin.coklugaleriduzen',compact('galeriresimler'));
    }

//çoklu galeri resmi silme işlemi
    public function galerisil($id){
        $sayfa  =Galeri::find($id);
        $sayfa->delete();
        if(!$sayfa->delete()){
            File::delete('resimler/galeri/'.$sayfa->galeriresimler.'');
            return Redirect::back()->with(array('mesaj'=>'Galeri resmi başarıyla silindi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Galeri resmi silinemedi bir problem mevcut!.','type'=>'error'));
        }
    }

}
}else { echo "Not : Modül kapalı olduğu işlevlerinin tümü devre dışıdır.Lütfen Modülü aktif edip deneyiniz.";}