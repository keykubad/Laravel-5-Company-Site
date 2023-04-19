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
use App\Iletisim;
use App\Urunler;
use App\EkstraAlan;
use App\Urunresim;
use Input;
use Redirect;
use App\Helper;
use App\Siparisler;
use Mail;
class AllContentController extends Controller {
	//İLETİŞİM MAİLLERİ İÇİN hem sql kayıt hemde mail atma işlevi
	 public function mail(Mail $message){
        $this->mailayar;
	 	$user=User::find(1);
        $data   =['adisoyadi'=>Input::get('adisoyadi'),'konu'=>Input::get('konu'),'email'=>Input::get('email'),
        'mesaj'=>Input::get('mesaj')];
        Mail::send('emails.mailonyuz', $data, function($message) use($user)
        {

            $message->to($user->email,Input::get('adisoyadi'))->subject(Input::get('konu'));

        });
        if($message){
        	$kaydet	=new Iletisim;
        	$kaydet->adsoyad=Input::get('adisoyadi');
        	$kaydet->baslik=Input::get('konu');
        	$kaydet->email=Input::get('email');
        	$kaydet->mesaj=Input::get('mesaj');
        	$kaydet->save();
            return Redirect::back()->with(array('title'=>'Gonderildi','mesaj'=>'Mesaj Başariyla Gonderildi!','type'=>'success'));
        }else{
        	return Redirect::back()->with(array('title'=>'HATA!!','mesaj'=>'Mesaj Gönderilemedi!','type'=>'error'));
        }
    }
    //Ürün detay sayfası içerikleri
     public function trurunicerik($id,$urunslug){
     	$urun 		=Urunler::where('id','=',$id)->first();
     	$metatitle	=$urun->urunadi;
     	$metadesc	=$urun->urundesc;
     	$metakeyw	=$urun->urunetiket;
     	$sayfaadi	=Sayfalar::where('id','=',$urun->urunkatid)->first();
     	$kategoriurun 		=Urunler::orderByRaw("RAND()")->take(3)->get();
     	$urunresimleri	=Urunresim::where('urunid','=',$urun->id)->get();
     	return view('tema.'.$this->tema.'.productdetail',compact('urun','metatitle','metakeyw','metadesc','geridon',
     		'sayfaadi','urunresimleri','kategoriurun'));

     }
     public function enurunicerik($id,$urunslug){
     	$urun 		=Urunler::where('id','=',$id)->first();
     	$metatitle	=$urun->urunadi;
     	$metadesc	=$urun->urundesc;
     	$metakeyw	=$urun->urunetiket;
     	$sayfaadi	=Sayfalar::where('id','=',$urun->urunkatid)->first();
     	$kategoriurun 		=Urunler::orderByRaw("RAND()")->where('urundil','=','en')->take(3)->get();
     	$urunresimleri	=Urunresim::where('urunid','=',$urun->id)->get();
     	return view('tema.'.$this->tema.'.productdetail',compact('urun','metatitle','metakeyw','metadesc','geridon',
     		'sayfaadi','urunresimleri','kategoriurun'));

     }
     public function deurunicerik($id,$urunslug){
     	$urun 		=Urunler::where('id','=',$id)->first();
     	$metatitle	=$urun->urunadi;
     	$metadesc	=$urun->urundesc;
     	$metakeyw	=$urun->urunetiket;
     	$sayfaadi	=Sayfalar::where('id','=',$urun->urunkatid)->first();
     	$kategoriurun 		=Urunler::orderByRaw("RAND()")->where('urundil','=','de')->take(3)->get();
     	$urunresimleri	=Urunresim::where('urunid','=',$urun->id)->get();
     	return view('tema.'.$this->tema.'.productdetail',compact('urun','metatitle','metakeyw','metadesc','geridon',
     		'sayfaadi','urunresimleri','kategoriurun'));

     }
     public function frurunicerik($id,$urunslug){
     	$urun 		=Urunler::where('id','=',$id)->first();
     	$metatitle	=$urun->urunadi;
     	$metadesc	=$urun->urundesc;
     	$metakeyw	=$urun->urunetiket;
     	$sayfaadi	=Sayfalar::where('id','=',$urun->urunkatid)->first();
     	$kategoriurun 		=Urunler::orderByRaw("RAND()")->where('urundil','=','fr')->take(3)->get();
     	$urunresimleri	=Urunresim::where('urunid','=',$urun->id)->get();
     	return view('tema.'.$this->tema.'.productdetail',compact('urun','metatitle','metakeyw','metadesc','geridon',
     		'sayfaadi','urunresimleri','kategoriurun'));

     }
    //siparis sayfası içerikleri
     public function trsiparissayfa($id,$urunslug){
        $urun       =Urunler::where('id','=',$id)->first();
        $metatitle  =$urun->urunadi;
        $metadesc   =$urun->urundesc;
        $metakeyw   =$urun->urunetiket;
        $ekstra     =EkstraAlan::find(1);
        return view('tema.'.$this->tema.'.ordersiparis',compact('urun','metatitle','metakeyw','metadesc','geridon',
            'sayfaadi','urunresimleri','ekstra'));

     }
         //siparis sayfası içerikleri
     public function ensiparissayfa($id,$urunslug){
        $urun       =Urunler::where('id','=',$id)->first();
        $metatitle  =$urun->urunadi;
        $metadesc   =$urun->urundesc;
        $metakeyw   =$urun->urunetiket;
        $ekstra     =EkstraAlan::find(1);
        return view('tema.'.$this->tema.'.ordersiparis',compact('urun','metatitle','metakeyw','metadesc','geridon',
            'sayfaadi','urunresimleri','ekstra'));

     }
        //siparis sayfası içerikleri
     public function desiparissayfa($id,$urunslug){
        $urun       =Urunler::where('id','=',$id)->first();
        $metatitle  =$urun->urunadi;
        $metadesc   =$urun->urundesc;
        $metakeyw   =$urun->urunetiket;
        $ekstra     =EkstraAlan::find(1);
        return view('tema.'.$this->tema.'.ordersiparis',compact('urun','metatitle','metakeyw','metadesc','geridon',
            'sayfaadi','urunresimleri','ekstra'));

     }
              //siparis sayfası içerikleri
     public function frsiparissayfa($id,$urunslug){
        $urun       =Urunler::where('id','=',$id)->first();
        $metatitle  =$urun->urunadi;
        $metadesc   =$urun->urundesc;
        $metakeyw   =$urun->urunetiket;
        $ekstra     =EkstraAlan::find(1);
        return view('tema.'.$this->tema.'.ordersiparis',compact('urun','metatitle','metakeyw','metadesc','geridon',
            'sayfaadi','urunresimleri','ekstra'));

     }
     public function sipariskayit(){
            $kaydet =new Siparisler;
            $kaydet->urunidi    =Input::get('urunid');
            $kaydet->fiyat      =Input::get('urunfiyat');
            $kaydet->durum      =Input::get('durum');
            $kaydet->adunvan    =Input::get('adunvan');
            $kaydet->email      =Input::get('email');
            $kaydet->telefon    =Input::get('tel');
            $kaydet->adet       =Input::get('adet');
            $kaydet->adres      =Input::get('adres');
            $kaydet->mesaj      =Input::get('mesaj');
            $kaydet->urunadi    =Input::get('urunad');
            $kaydet->save();
                if($kaydet->save()){
                    return Redirect::back()->with(array('title'=>'Sipariş tamamlandı','mesaj'=>'Siparişiniz Başarıyla Alındı!','type'=>'success'));
                }else{
                    return Redirect::back()->with(array('title'=>'Sipariş Hatalı!','mesaj'=>'Siparişinizi kontrol edip tekrar deneyiniz','type'=>'success'));
                }

     }
}