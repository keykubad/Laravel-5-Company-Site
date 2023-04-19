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
use App\Video;
use App\Moduller;
use DB;
    $modul=DB::table('moduller')->where('id', '3')->first();
    if($modul->durum==1){
class VideoController extends Controller {
    //haber ekleme kısmı form
    public function videoform(){
        $video  =Video::all();
       return  view('admin.videoekle',['video'=>$video]);
    }
    //haber formundan gelen veriyi kaydet
    public function videokayit(){
        $video               =new Video;
        $video->videoadi        = Input::get('videoadi');
        $video->videodil        = Input::get('videodil');
        $video->videourl        = Input::get('videourl');
        $video->videoicerik     = Input::get('videoicerik');
        $video->videodurum      = Input::get('videodurum');
        $video->videoslug       = Str::slug(Input::get('videoadi'));
        $video->videodesc       = Input::get('videodesc');
        $video->videokeyw       = Input::get('videokeyw');
        $video->anasayfa        = Input::get('anasayfa');
        if (Input::hasFile('videoresim')) {
            File::delete('resimler/video/'.$video->videoresim.'');
            $resim = Input::file('videoresim');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/video/', $isim);
            $image = Image::make('resimler/video/' . $isim)->resize($this->videoboyut->yukseklik, $this->videoboyut->genislik)->save();
            $video->videoresim = $isim;
            $video->save();
        }
        $video->save();
        if($video->save()){
            return Redirect::back()->with(array('mesaj'=>'Video başarıyla kaydedildi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Video kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //Haber listesini ekrana basıyoruz
    public function videoliste(){
        $video      =Video::paginate(9);
        $videosay   =Video::all()->count();
        return  view('admin.videoduzen',['video'=>$video,'videosay'=>$videosay]);
    }
    //Haber düzenleme kayıt formu
    public function videoduzenkaydi($id){
        $video          =Video::find($id);
        $videolar       =Video::all();
        return  view('admin.videoduzenkayit',['video'=>$video,'videolar'=>$videolar]);
    }
    //Haber duzenlemeden gelen veriyi kayıt ediyoruz
    public function videokayitla($id){
        $video                  =Video::find($id);
        $video->videodurum      = Input::get('videodurum');
        $video->videodil        = Input::get('videodil');
        $video->videoadi        = Input::get('videoadi');
        $video->videoicerik        = Input::get('videoicerik');
        $video->videoslug       = Str::slug(Input::get('videoadi'));
        $video->videokeyw       = Input::get('videokeyw');
        $video->videodesc       = Input::get('videodesc');
        $video->videourl       = Input::get('videourl');
        $video->anasayfa        = Input::get('anasayfa');
        if (Input::hasFile('videoresim')) {
            File::delete('resimler/video/'.$video->videoresim.'');
            $resim = Input::file('videoresim');
            $dosyaadi = $resim->getClientOriginalName();
            $uzanti = $resim->getClientOriginalExtension();
            $isim = Str::slug($dosyaadi) . Str::slug(str_random(5)) . '.' . $uzanti;
            $dosya = $resim->move('resimler/video/', $isim);
            $image = Image::make('resimler/video/' . $isim)->resize($this->videoboyut->yukseklik, $this->videoboyut->genislik)->save();
            $video->videoresim = $isim;
            $video->save();
        }
        $video->save();
        if($video->save()){
            return Redirect::back()->with(array('mesaj'=>'Video başarıyla düzenlendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Video kaydedilemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    public function videosil($id){
        $sayfa  =Video::find($id);
        $sayfa->delete();
        if(!$sayfa->delete()){
            return Redirect::back()->with(array('mesaj'=>'Video başarıyla silindi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Video silinemedi bir problem mevcut!.','type'=>'error'));
        }
    }
}
}else { echo "Not : Modül kapalı olduğu işlevlerinin tümü devre dışıdır.Lütfen Modülü aktif edip deneyiniz.";}