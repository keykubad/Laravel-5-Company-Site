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
use App\Urunler;
use App\Urunresim;
use App\Moduller;
use DB;
    $modul=DB::table('moduller')->where('id', '5')->first();
    if($modul->durum==1){
class UrunlerController extends Controller {
    //ana kısım ilk ekran
    public function urunekle(){
        $urunkat   =Sayfalar::where('modulid','=','5')->get();
        return  view('admin.urunekle',compact('urunkat'));
    }
    //urun ekleme formu kayıt etme
    public function urunkayit(){
        $urun                  =new Urunler;
        $urun->urunadi          = Input::get('urunadi');
        $urun->urunslug         = Str::slug(Input::get('urunadi'));
        $urun->urunkodu         = Input::get('urunkodu');
        $urun->urunfiyati       = Input::get('urunfiyat');
        $urun->urundurum        = Input::get('urundurum');
        $urun->urunkatid        = Input::get('urunkat');
        $urun->urundil          = Input::get('urundil');
        $urun->urunicerik       = Input::get('urunicerik');
        $urun->urunetiket       = Input::get('urunkeyw');
        $urun->urundesc         = Input::get('urundesc');
        $urun->anasayfa         = Input::get('anasayfa');
        if (Input::hasFile('urunresim')) {
            File::delete('resimler/urunler/'.$urun->urunresim.'');
            $resim = Input::file('urunresim');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/urunler/', $isim);
            $image = Image::make('resimler/urunler/' . $isim)->resize($this->urunboyut->yukseklik,$this->urunboyut->genislik)->save();
            $urun->urunresim = $isim;
            $urun->save();
        }
        $urun->save();
        if($urun->save()){
            return Redirect::back()->with(array('mesaj'=>'Ürün Başarı ile eklendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Ürün eklenemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //çoklu urun formu
    public function cokluurunekle($id){
        $urunler=Urunler::find($id);
        return  view('admin.cokluurunekle',compact('urunler'));
    }
    //ürün düzenleme menüsü
    public function urunduzenleme($id){
        $urun   =Urunler::find($id);
        $urunkat   =Sayfalar::where('modulid','=','5')->get();
        return  view('admin.urunduzenleme',compact('urun','urunkat'));
    }
    //urun düzenleme formu kayıt etme
    public function urunduzenlemekayit($id){
        $urun                  =Urunler::find($id);
        $urun->urunadi          = Input::get('urunadi');
        $urun->urunslug         = Str::slug(Input::get('urunadi'));
        $urun->urunkodu         = Input::get('urunkodu');
        $urun->urunfiyati       = Input::get('urunfiyat');
        $urun->urundurum        = Input::get('urundurum');
        $urun->urunkatid        = Input::get('urunkat');
        $urun->urundil          = Input::get('urundil');
        $urun->urunicerik       = Input::get('urunicerik');
        $urun->urunetiket       = Input::get('urunkeyw');
        $urun->urundesc         = Input::get('urundesc');
        $urun->anasayfa         = Input::get('anasayfa');
        if (Input::hasFile('urunresim')) {
            File::delete('resimler/urunler/'.$urun->urunresim.'');
            $resim = Input::file('urunresim');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/urunler/', $isim);
            $image = Image::make('resimler/urunler/' . $isim)->resize($this->urunboyut->yukseklik,$this->urunboyut->genislik)->save();
            $urun->urunresim = $isim;
            $urun->save();
        }
        $urun->save();
        if($urun->save()){
            return Redirect::back()->with(array('mesaj'=>'Ürün Başarı ile düzenlendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Ürün düzenlenemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //çoklu ürün ekleme kayıt
    public function modalurun($id){

        $files = Input::file('urunresimler');

        $file_count = count($files);
        $uploadcount = 0;
        foreach($files as $file) {
            $rules = array('file' => 'required');
            $validator = Validator::make(array('file'=> $file), $rules);
            if($validator->passes()){
                $destinationPath = 'resimler/urunler/';
                $filename = $file->getClientOriginalName();
                $uzanti = $file->getClientOriginalExtension();
                $isim = Str::slug($filename) . Str::slug(str_random(5)) . '.' . $uzanti;
                $upload_success = $file->move($destinationPath, $isim);
                $image = Image::make('resimler/urunler/' . $isim)->resize($this->urunboyut->yukseklik,$this->urunboyut->genislik)->save();
                $file                 =new Urunresim;
                $file->urunid = $id;
                $file->urunresimler = $isim;
                $file->save();
                $uploadcount ++;
            }

        }
        if($uploadcount == $file_count){
                return Redirect::back()->with(array('mesaj'=>'Ürün Başarı ile eklendi!.','type'=>'success'));
        }
        else {
            return Redirect::back()->with(array('mesaj'=>'Ürün eklenemedi bir problem mevcut!.','type'=>'error'));
        }

    }

    //çoklu resim listesinden resim düzenleme kayıt kısmı
    public function cokluresimkayit($id){
        $urun   = Urunresim::find($id);
        if (Input::hasFile('urunimage')) {
            File::delete('resimler/urunler/'.$urun->urunresimler.'');
            $resim = Input::file('urunimage');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/urunler/', $isim);
            $image = Image::make('resimler/urunler/' . $isim)->resize($this->urunboyut->yukseklik,$this->urunboyut->genislik)->save();
            $urun->urunresimler = $isim;
            $urun->save();
        }
        $urun->save();
        if($urun->save()){
            return Redirect::back()->with(array('mesaj'=>'Ürün resmi başarı ile düzenlendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Ürün resmi düzenlenemedi bir problem mevcut!.','type'=>'error'));
        }
    }

    //ürün listesi formu
    public function urunliste(){
        $urunkat   =Sayfalar::where('modulid','=','5')->get();
        $urunkac    =Sayfalar::where('modulid','=','5')->count();
        $urun      =Urunler::paginate(9);
        return  view('admin.urunduzen',compact('urunkat','urun','urunkac'));
    }
    //çoklu ürün düzenleme listesi
    public function uruncoklu($urunid){
        $urunresimler   =DB::table('urunresim')->where('urunid', $urunid)->get();
        return  view('admin.cokluurunduzen',compact('urunresimler'));
    }

    public function urunkatsil($id){
        $sayfa  =UrunKategori::find($id);
        $sayfa->delete();
        if(!$sayfa->delete()){
            return Redirect::back()->with(array('mesaj'=>'Ürün kategorisi başarıyla silindi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Ürün kategorisi silinemedi bir problem mevcut!.','type'=>'error'));
        }
    }
//çoklu ürün resmi silme işlemi
    public function cokluresimsil($id){
        $sayfa  =Urunresim::find($id);
        $sayfa->delete();
        if(!$sayfa->delete()){
            File::delete('resimler/urunler/'.$sayfa->urunresimler.'');
            return Redirect::back()->with(array('mesaj'=>'Ürün resmi başarıyla silindi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Ürün resmi silinemedi bir problem mevcut!.','type'=>'error'));
        }
    }
	//çoklu ürün resmi silme işlemi
    public function urunsilme($id){
        $sayfa  =Urunler::find($id);
        $sayfa->delete();
        if(!$sayfa->delete()){
            File::delete('resimler/urunler/'.$sayfa->urunresimler.'');
            return Redirect::back()->with(array('mesaj'=>'Ürün başarıyla silindi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Ürün silinemedi bir problem mevcut!.','type'=>'error'));
        }
    }
}
}else { echo "Not : Modül kapalı olduğu işlevlerinin tümü devre dışıdır.Lütfen Modülü aktif edip deneyiniz.";}