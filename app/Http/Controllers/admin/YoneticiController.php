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
use App\User;
use App\Gapi;
use App\Iletisim;
use DB;
use App\GenelAyar;
use App\Siparisler;
use Config;

class YoneticiController extends Controller {
    //ana kısım ilk ekran
	public function giris()
	{
        $siparislist    =DB::table('siparisler')->orderBy('id', 'desc')->take(5)->get();
        $user=User::find(1);
        $iletisim   =  DB::table('iletisim')->count();
        $siparis    =   DB::table('siparisler')->count();
        $urun       =   DB::table('urunler')->count();
        $galeri     =   DB::table('galeri')->count();
        $haber     =   DB::table('haberler')->count();
        $duyuru     =   DB::table('duyurular')->count();
       
        $gaEmail    = $user->analytics_mail;
        $p12Pass    = $user->analiytcs_sifre;
        $profileId  = $user->analiytcs_profilid;
        $bitis=date("Y-m-d");
        $fromDate = date ("Y-m-d",strtotime('-7 day',strtotime($bitis)));
        $dimensions = array('date');
        $metrics    = array('visits','pageviews');
        $sortMetric	= null;
        $filter		= null;
        $ga = new gapi($gaEmail,$p12Pass);
        $ga->requestReportData($profileId,$dimensions,$metrics,$sortMetric,$filter,$fromDate,$bitis);

        foreach($ga->getResults() as $result)
        {

            $tekil[] = $result->getVisits();
            $cogul[] = $result->getPageviews();
        }
        for($x=0;$x<=7;$x++){
            $yeni = date ("d-m-Y", strtotime("+".$x." day", strtotime($fromDate)));
            $dateArray[] =  "'{$yeni}'";
        }

        return view('admin.anakisim',compact('tekil','cogul','dateArray','iletisim','siparis','urun','galeri','haber','duyuru','iletisim','siparislist'));
	}
    //çıkış işlemi
    public function cikisyap()
    {
        Auth::logout();
        return Redirect::to('giris');
    }
    //şifre ve mail ayar İşlemi
    public function sifre()
    {
        $user   = User::find(1);
        $mailcek= GenelAyar::find(1);
        return View('admin.sifre',compact('user','mailcek'));
    }
    //şifre değiştirme işlemi
    public function sifrepost()
    {
        $users           = User::find(1);
        $users->email    = Input::get('kullaniciadi');
        $users->name     = Input::get('adi');
        $users->password = Hash::make(Input::get('password'));
        $users->save();
        if($users->save()){
           return Redirect::back()->with(array('mesaj'=>'Kullanıcı başarıyla düzenlendi!.','type'=>'success'));
        }
    }

    //Analytics bilgileri
    public function analytics()
    {
        $user   = User::find(1);
        return View('admin.analytics',compact('user'));
    }

    //şAnalytics Kayıt işlemi
    public function analyticskayit()
    {
        $users           = User::find(1);
        $users->analytics_mail          = Input::get('analytics_mail');
        $users->analiytcs_profilid      = Input::get('analytics_profilid');
        $users->analiytcs_sifre         = Input::get('analytics_sifre');
        $users->save();
        if($users->save()){
            return Redirect::back()->with(array('mesaj'=>'Google Analytics ayarları başarıyla düzenlendi!.','type'=>'success'));
        }
    }
    //mail server işlemi
    public function mailserverpost()
    {
       $kayit= GenelAyar::find(1);
       $kayit->mailhost          =Input::get('sunucu');
       $kayit->mailkullanici     =Input::get('maili');
       $kayit->mailsifre         =Input::get('sifre');
       $kayit->sifretip          =Input::get('tip');
       $kayit->driver            =Input::get('driver');
       $kayit->port              =Input::get('port');
       $kayit->kime              =Input::get('kime');
       $kayit->baslik            =Input::get('baslik');
       $kayit->save();
            if($kayit->save()){
                return Redirect::back()->with(array('mesaj'=>'Mail ayarları başarıyla düzenlendi!.','type'=>'success'));
            }else{
                return Redirect::back()->with(array('mesaj'=>'Mail ayarları kaydedilemedi bir problem mevcut!.','type'=>'error'));
            }
     
    }
    //Yönetici sayfası arama modülü
    public function icerikara(){
        $ne     =Input::get('ne');
        $ara    =Input::get('ara');
            if($ne==1){
                $arama  =DB::table('urunler')
                          ->where('urunadi', 'LIKE', "%$ara%")
                          ->paginate(10); 
            }elseif($ne==2){
                $arama  =DB::table('sayfalar')
                          ->where('sayfaadi', 'LIKE', "%$ara%")
                          ->paginate(10); 
            }elseif($ne==3){
                $arama  =DB::table('duyurular')
                          ->where('duyurubaslik', 'LIKE', "%$ara%")
                          ->paginate(10); 
            }elseif($ne==4){
                $arama  =DB::table('galeri')
                          ->where('galeribaslik', 'LIKE', "%$ara%")
                          ->paginate(10); 
            }elseif($ne==5){
                $arama  =DB::table('haberler')
                          ->where('haberbaslik', 'LIKE', "%$ara%")
                          ->paginate(10); 
            }elseif($ne==6){
                $arama  =DB::table('referans')
                          ->where('refbaslik', 'LIKE', "%$ara%")
                          ->paginate(10); 
            }elseif($ne==7){
                $arama  =DB::table('siparisler')
                          ->where('urunadi', 'LIKE', "%$ara%")
                          ->paginate(10); 
            }elseif($ne==8){
                $arama  =DB::table('video')
                          ->where('videoadi', 'LIKE', "%$ara%")
                          ->paginate(10); 
            }

            return view('admin.search',compact('arama','ne','ara'));
        
    }
}
