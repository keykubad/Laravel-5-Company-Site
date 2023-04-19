<?php namespace App\Http\Controllers;
/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */

use Auth;
use Redirect;
use Input;
class GirisController extends Controller {

	public function index()
	{
		return view('admin.login');
	}
//kullanıcı girşinde posttan gelen değer dogru ise kontrol ediyoruz
    public function postgiris(){
        if(Auth::attempt(array('email'=>Input::get('email'),'password'=>Input::get('password')),Input::get('remember_token')))
        {
            /* Kullanıcı başarılı bir şekilde giriş yapmış ise */
            return Redirect::intended('yonetim/admin')->with(array('mesaj'=>'Hoşgeldiniz Sayın '.Auth::user()->email.' sisteme bağlandınız','type'=>'success'));
        }else{
            return Redirect::back()->with(array('mesaj'=>'Giriş Hatası E-Posta adresiniz veya şifreniz hatalıdır.','type'=>'error'));
        }
    }

}
