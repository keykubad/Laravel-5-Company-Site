<?php namespace App\Http\Controllers\onyuz;
/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */
use DB;
use Request;
use App\Sayfalar;
use App\SiteAyar;
use App\User;
use App\GenelAyar;
use App\Galeri;
use App\Urunler;
use App\Mailler;
use Input;
use Redirect;
use Mail;
class FormController extends Controller {
	public function arama(){
		$ara 	=Input::get('ara');
		$arama	=DB::table('sayfalar')
                  ->where('sayfaadi', 'LIKE', "%$ara%")
                  ->paginate(8);
       	return view('tema.'.$this->tema.'.search',compact('arama'));
	}
	//Mail listesi kaydı
	public function mailal(){
		$mailkayit	= new Mailler;
		$mailkayit	->email =Input::get('email');
		$mailkayit 	->save();
             if($mailkayit->save()){
                    return Redirect::back()->with(array('title'=>'Email adresiniz kayıt edildi','mesaj'=>'Mail adresiniz site duyuru listemize eklendi.','type'=>'success'));
                }else{
                    return Redirect::back()->with(array('title'=>'HATA!','mesaj'=>'Kayıt esnasında bir problem oluştu!','type'=>'success'));
                }
	}
	//İNSAN KAYNAKLARI formu mail gönderimi
	public function mailgit(Mail $message){
		$this->mailayar;
		$user=User::find(1);
		$input = Request::all();
		//return Request::file('ozgecmis');
        Mail::send(['html' => 'emails.mailik'], $input, function($message) use($user)
        {
            $message->to($user->email,Input::get('adsoyad'))->subject(''.Input::get('adsoyad') .' -Insan Kaynakları Formu');
		    $message->attach(Request::file('ozgecmis')->getRealPath(), array(
		        'as' => 'ozgecmis.' . Request::file('ozgecmis')->getClientOriginalExtension(), 
		        'mime' => Request::file('ozgecmis')->getMimeType()));

        });
        if($message){
            return Redirect::back()->with(array('title'=>'Gonderildi','mesaj'=>'Mesaj Başariyla Gonderildi!','type'=>'success'));
        }else{
        	return Redirect::back()->with(array('title'=>'HATA!!','mesaj'=>'Mesaj Gönderilemedi!','type'=>'error'));
        }
     }

}