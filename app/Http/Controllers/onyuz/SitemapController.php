<?php namespace App\Http\Controllers\onyuz;
/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */
use DB;
use Request;
use App\Sayfalar;
use App\Kategori;
use App\User;
use App\Duyurular;
use App\Referans;
use App\Moduller;
use App\Galeri;
use App\Urunler;
use App\Haberler;
use App\Helper;
use App\Video;
use App\GaleriKategori;
use Response;
class SitemapController extends Controller {
	public function sitemap()
	{
	    $blogs 	= Sayfalar::all(); //çek
	    $galeri = Galeri::all();
	    $urun = Urunler::all();
	    $haber = Haberler::all();
	    $video = Video::all();
		$duyuru = Duyurular::all();
		$ref	 = Referans::all();
	    return Response::view('tema.'.$this->tema.'.sitemap', compact('blogs', 'galeri','urun','haber','video','duyuru','ref'))
	        ->header('Content-Type', 'application/xml');
	}

}