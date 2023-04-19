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
use App\Haberler;
use App\Duyurular;
class ContentController extends Controller {
	public function tricerik ($sayfaurl){

			$meta			=DB::table('siteayar')->where('dil', '=', 'tr')->first();
			$icerik			=Sayfalar::where('sayfaurl',$sayfaurl)->first();
			$metaal			=explode(',',$icerik->sayfakeyw);//etiketler için ayırma
			$metatitle		=$icerik->sayfaadi;
			$metadesc		=$icerik->sayfadesc;
			$metakeyw		=$icerik->sayfakeyw;
		return view('tema.'.$this->tema.'.content',compact('metatitle','metadesc','metakeyw','genelayar','user','menucek','metaal','meta','icerik'));
		
	}
	public function enicerik ($sayfaurl){

			$meta			=DB::table('siteayar')->where('dil', '=', 'en')->first();
			$icerik			=Sayfalar::where('sayfaurl',$sayfaurl)->first();
			$metaal			=explode(',',$icerik->sayfakeyw);//etiketler için ayırma
			$metatitle		=$icerik->sayfaadi;
			$metadesc		=$icerik->sayfadesc;
			$metakeyw		=$icerik->sayfakeyw;
			
		return view('tema.'.$this->tema.'.content',compact('metatitle','metadesc','metakeyw','genelayar','user','menucek','metaal','meta','icerik'));
		
	}
	public function deicerik ($sayfaurl){

			$meta			=DB::table('siteayar')->where('dil', '=', 'de')->first();
			$icerik			=Sayfalar::where('sayfaurl',$sayfaurl)->first();
			$metaal			=explode(',',$icerik->sayfakeyw);//etiketler için ayırma
			$metatitle		=$icerik->sayfaadi;
			$metadesc		=$icerik->sayfadesc;
			$metakeyw		=$icerik->sayfakeyw;
			
		return view('tema.'.$this->tema.'.content',compact('metatitle','metadesc','metakeyw','genelayar','user','menucek','metaal','meta','icerik'));
		
	}
	public function fricerik ($sayfaurl){

			$meta			=DB::table('siteayar')->where('dil', '=', 'fr')->first();
			$icerik			=Sayfalar::where('sayfaurl',$sayfaurl)->first();
			$metaal			=explode(',',$icerik->sayfakeyw);//etiketler için ayırma
			$metatitle		=$icerik->sayfaadi;
			$metadesc		=$icerik->sayfadesc;
			$metakeyw		=$icerik->sayfakeyw;
			
		return view('tema.'.$this->tema.'.content',compact('metatitle','metadesc','metakeyw','genelayar','user','menucek','metaal','meta','icerik'));
		
	}
	//haber içerikleri
	public function habericerik ($id){

			$haber			=Haberler::find($id);
			$haberson			=Haberler::where('haberdil', 'tr')->orderBy('id','desc')->take(5)->get();
			$metaal			=explode(',',$haber->haberkeyw);//etiketler için ayırma
			$metatitle		=$haber->haberbaslik;
			$metadesc		=$haber->haberdesc;
			$metakeyw		=$haber->haberkeyw;
			$sayfaadi	=Sayfalar::where('katid','=',$haber->id)->first();
		return view('tema.'.$this->tema.'.newsdetail',compact('metatitle','metadesc','metakeyw','genelayar','user','menucek','metaal','meta','haber','sayfaadi','haberson'));
		
	}
	//haber içerikleri
	public function enhabericerik ($id){

			$haber			=Haberler::where('haberdil','=','en')->find($id);
			$metaal			=explode(',',$haber->haberkeyw);//etiketler için ayırma
			$metatitle		=$haber->haberbaslik;
			$metadesc		=$haber->haberdesc;
			$metakeyw		=$haber->haberkeyw;
			$sayfaadi	=Sayfalar::where('katid','=',$haber->id)->first();
		return view('tema.'.$this->tema.'.newsdetail',compact('metatitle','metadesc','metakeyw','genelayar','user','menucek','metaal','meta','haber','sayfaadi'));
		
	}
	//haber içerikleri
	public function dehabericerik ($id){

			$haber			=Haberler::where('haberdil','=','de')->find($id);
			$metaal			=explode(',',$haber->haberkeyw);//etiketler için ayırma
			$metatitle		=$haber->haberbaslik;
			$metadesc		=$haber->haberdesc;
			$metakeyw		=$haber->haberkeyw;
			$sayfaadi	=Sayfalar::where('katid','=',$haber->id)->first();
		return view('tema.'.$this->tema.'.newsdetail',compact('metatitle','metadesc','metakeyw','genelayar','user','menucek','metaal','meta','haber','sayfaadi'));
		
	}
	//haber içerikleri
	public function frhabericerik ($id){

			$haber			=Haberler::where('haberdil','=','de')->find($id);
			$metaal			=explode(',',$haber->haberkeyw);//etiketler için ayırma
			$metatitle		=$haber->haberbaslik;
			$metadesc		=$haber->haberdesc;
			$metakeyw		=$haber->haberkeyw;
			$sayfaadi	=Sayfalar::where('katid','=',$haber->id)->first();
		return view('tema.'.$this->tema.'.newsdetail',compact('metatitle','metadesc','metakeyw','genelayar','user','menucek','metaal','meta','haber','sayfaadi'));
		
	}
	//duyuru içerikleri
	public function duyuruicerik ($id){
			$duyuru			=Duyurular::where('duyurudil','=','tr')->find($id);
			$metaal			=explode(',',$duyuru->duyurukeyw);//etiketler için ayırma
			$metatitle		=$duyuru->duyurubaslik;
			$metadesc		=$duyuru->duyurudesc;
			$metakeyw		=$duyuru->duyurukeyw;
			$sayfaadi	=Sayfalar::where('katid','=',$duyuru->id)->first();
		return view('tema.'.$this->tema.'.anonsdetail',compact('metatitle','metadesc','metakeyw','genelayar','user','menucek','metaal','meta','duyuru','sayfaadi'));
		
	}
		//duyuru içerikleri
	public function enduyuruicerik ($id){
			$duyuru			=Duyurular::where('duyurudil','=','en')->find($id);
			$metaal			=explode(',',$duyuru->duyurukeyw);//etiketler için ayırma
			$metatitle		=$duyuru->duyurubaslik;
			$metadesc		=$duyuru->duyurudesc;
			$metakeyw		=$duyuru->duyurukeyw;
			$sayfaadi	=Sayfalar::where('katid','=',$duyuru->id)->first();
		return view('tema.'.$this->tema.'.anonsdetail',compact('metatitle','metadesc','metakeyw','genelayar','user','menucek','metaal','meta','duyuru','sayfaadi'));
		
	}
			//duyuru içerikleri
	public function deduyuruicerik ($id){
			$duyuru			=Duyurular::where('duyurudil','=','de')->find($id);
			$metaal			=explode(',',$duyuru->duyurukeyw);//etiketler için ayırma
			$metatitle		=$duyuru->duyurubaslik;
			$metadesc		=$duyuru->duyurudesc;
			$metakeyw		=$duyuru->duyurukeyw;
			$sayfaadi	=Sayfalar::where('katid','=',$duyuru->id)->first();
		return view('tema.'.$this->tema.'.anonsdetail',compact('metatitle','metadesc','metakeyw','genelayar','user','menucek','metaal','meta','duyuru','sayfaadi'));
		
	}
			//duyuru içerikleri
	public function frduyuruicerik ($id){
			$duyuru			=Duyurular::where('duyurudil','=','fr')->find($id);
			$metaal			=explode(',',$duyuru->duyurukeyw);//etiketler için ayırma
			$metatitle		=$duyuru->duyurubaslik;
			$metadesc		=$duyuru->duyurudesc;
			$metakeyw		=$duyuru->duyurukeyw;
			$sayfaadi	=Sayfalar::where('katid','=',$duyuru->id)->first();
		return view('tema.'.$this->tema.'.anonsdetail',compact('metatitle','metadesc','metakeyw','genelayar','user','menucek','metaal','meta','duyuru','sayfaadi'));
		
	}

 }