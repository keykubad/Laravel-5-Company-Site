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
use Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Facade;
use ImageManager;
use Request;
use App\Iletisim;
class IletisimController extends Controller {
    //ana kısım ilk ekran
    public function iletisimgor(){
        $iletisim   =Iletisim::paginate(9);
        $iletisimkac        =Iletisim::all()->count();
       return  view('admin.mesajlar',compact('iletisim','iletisimkac'));
    }
    //iletisim okundu işaretleme kısmı
    public function iletisimokuma($id){
        $iletisim   =Iletisim::find($id);
        $iletisim->kontrol=1;
        $iletisim->save();
        if($iletisim->save()){
            return Redirect::back()->with(array('mesaj'=>'İletişim mesajı başarıyla okundu işaretlendi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'İletişim mesajı okundu işaretlenemedi hata var!.','type'=>'error'));
        }
    }
    //İletişim mesajı silme
    public function iletisimsil($id){
        $sayfa  =Iletisim::find($id);
        $sayfa->delete();
        if(!$sayfa->delete()){
            return Redirect::back()->with(array('mesaj'=>'İletişim mesajı başarıyla silindi!.','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'İletişim mesajı silinemedi bir problem mevcut!.','type'=>'error'));
        }
    }
    //iletisim mesajı yanıtlama formu
    public function iletisimyanitla($id){
        $mesaj       =Iletisim::find($id);
        return View('admin.iletisimyanitla',compact('mesaj'));
    }
    //mail yollama kısmı burada gerçekleşiyor
    public function iletisimmail(Mail $message,$id){
        $this->mailayar;
        $iletisim=Iletisim::find($id);
        $data   =['baslik'=>Input::get('baslik'),'icerik'=>Input::get('icerik'),'email'=>$iletisim->email];
        Mail::send('emails.mail', $data, function($message) use($iletisim)
        {

            $message->to($iletisim->email,$iletisim->baslik)->subject($iletisim->baslik);

        });
        if($message){
            return Redirect::back()->with(array('mesaj'=>'İletişim mesajı başarıyla yollandı!.','type'=>'success'));
        }
    }
}
