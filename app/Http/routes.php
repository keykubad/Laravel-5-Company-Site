<?php
/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */

Route::get('giris', 'GirisController@index');
Route::post('yonetim/login', 'GirisController@postgiris');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
/* Admin kısmı rotaları */
Route::group(['prefix' => 'yonetim', 'middleware' => 'auth'], function()
{
    Route::get('admin', 'admin\YoneticiController@giris');
    Route::get('arama', 'admin\YoneticiController@icerikara');
    Route::post('arama', 'admin\YoneticiController@icerikara');
    Route::get('cikis', 'admin\YoneticiController@cikisyap');
    //şifre
    Route::get('sifreduzenle', 'admin\YoneticiController@sifre');
    Route::get('analytics', 'admin\YoneticiController@analytics');
    Route::post('analytics', 'admin\YoneticiController@analyticskayit');
    Route::post('sifreduzenle', 'admin\YoneticiController@sifrepost');
    //site ayarları
    Route::get('siteayarlari', 'admin\SiteAyarController@genel');
    Route::get('siteayarliste', 'admin\SiteAyarController@siteliste');
    Route::get('siteayarduzenle/{id}', 'admin\SiteAyarController@sitelistebas');
    Route::post('siteayarduzenle/{id}', 'admin\SiteAyarController@siteduzen');
    Route::get('sitesil/{id}', 'admin\SiteAyarController@siteayarsil');
    Route::post('siteayarlari', 'admin\SiteAyarController@genelkayit');
    //sayfa yolları
    Route::get('sayfaekle', 'admin\SayfalarController@sayfakayit');
    Route::post('sayfaekle', 'admin\SayfalarController@sayfapost');
    Route::get('sayfaduzenle', 'admin\SayfalarController@sayfaduzen');
    Route::post('sayfaduzenle/{id}', 'admin\SayfalarController@modalsayfakayit');
    Route::get('sayfaduzenlekayit/{id}', 'admin\SayfalarController@sayfaduzenlekayit');
    Route::post('sayfaduzenlekayit/{id}', 'admin\SayfalarController@sayfaduzenlekayitla');
    Route::get('sayfasil/{id}', 'admin\SayfalarController@sayfasil');
    //Sabit ayarlar
    Route::get('sabitayarlar', 'admin\GenelAyarController@sabit');
    Route::post('sabitayarlar', 'admin\GenelAyarController@sabitkayit');
    //haber rotaları
    Route::get('haberekle', 'admin\HaberlerController@haberform');
    Route::post('haberekle', 'admin\HaberlerController@haberkayit');
    Route::get('haberduzenle', 'admin\HaberlerController@haberliste');
    Route::get('haberduzenkayit/{id}', 'admin\HaberlerController@haberduzenkaydi');
    Route::get('habersil/{id}', 'admin\HaberlerController@habersilme');
    Route::post('haberduzenkayit/{id}', 'admin\HaberlerController@haberkayitla');
    //Referans rotaları
    Route::get('referans', 'admin\ReferansController@referanslar');
    Route::post('referans', 'admin\ReferansController@referanskayit');
    Route::get('referansgor/{id}', 'admin\ReferansController@referansbak');
    Route::post('referansgor/{id}', 'admin\ReferansController@referansduzenle');
    Route::get('referanssil/{id}', 'admin\ReferansController@referanssilme');
    //Video rotaları
    Route::get('videoekle', 'admin\VideoController@videoform');
    Route::post('videoekle', 'admin\VideoController@videokayit');
    Route::get('videoduzenle', 'admin\VideoController@videoliste');
    Route::get('videoduzen/{id}', 'admin\VideoController@videoduzenkaydi');
    Route::post('videoduzen/{id}', 'admin\VideoController@videokayitla');
    Route::get('videosil/{id}', 'admin\VideoController@videosil');
    //Duyuru rotaları
    Route::get('duyurular', 'admin\DuyurularController@duyurular');
    Route::post('duyurular', 'admin\DuyurularController@duyurukayit');
    Route::get('duyurugor/{id}', 'admin\DuyurularController@duyurugor');
    Route::post('duyurugor/{id}', 'admin\DuyurularController@duyuruduzenle');
    Route::get('duyurusil/{id}', 'admin\DuyurularController@duyurusil');
    //İletişim rotaları
    Route::get('mesajlar', 'admin\IletisimController@iletisimgor');
    Route::get('iletisimokundu/{id}', 'admin\IletisimController@iletisimokuma');
    Route::get('iletisimsil/{id}', 'admin\IletisimController@iletisimsil');
    Route::get('iletisimyanit/{id}', 'admin\IletisimController@iletisimyanitla');
    Route::post('iletisimyanit/{id}', 'admin\IletisimController@iletisimmail');
    //Slider rotaları
    Route::get('slider', 'admin\SliderController@banner');
    Route::post('slider', 'admin\SliderController@bannerkayit');
    Route::post('slider/{id}', 'admin\SliderController@modalkayit');
    Route::get('slidergor/{id}', 'admin\SliderController@slidergor');
    Route::post('slidergor/{id}', 'admin\SliderController@bannerkayitla');
    Route::get('slidersil/{id}', 'admin\SliderController@slidersil');
    //Ürün Kategori Rotaları
    Route::get('urunkategori', 'admin\UrunKategoriController@urunkat');
    Route::post('urunkategori', 'admin\UrunKategoriController@urunkatkayit');
    Route::get('urunkatduzen/{id}', 'admin\UrunKategoriController@urunkatduzen');
    Route::post('urunkatduzen/{id}', 'admin\UrunKategoriController@urunkatduzenle');
    Route::get('urunkatsil/{id}', 'admin\UrunKategoriController@urunkatsil');
    //Ürünler Rotaları
    Route::get('urunekle', 'admin\UrunlerController@urunekle');
    Route::get('urunduzen', 'admin\UrunlerController@urunliste');
	Route::get('urunsil/{id}', 'admin\UrunlerController@urunsilme');
    Route::post('urunekle', 'admin\UrunlerController@urunkayit');
    Route::get('urunduzenleme/{id}', 'admin\UrunlerController@urunduzenleme');
    Route::post('urunduzenleme/{id}', 'admin\UrunlerController@urunduzenlemekayit');
    Route::get('urunduzen/{id}', 'admin\UrunlerController@cokluurunekle');
    Route::get('cokluurunduzen/{urunid}', 'admin\UrunlerController@uruncoklu');
    Route::post('cokluresimduzenle/{id}', 'admin\UrunlerController@cokluresimkayit');
    Route::get('cokluresimsil/{id}', 'admin\UrunlerController@cokluresimsil');
    Route::post('urunduzen/{id}', 'admin\UrunlerController@modalurun');
    //Galeri Rotaları
    Route::get('galerikategori', 'admin\GaleriKategoriController@galerikat');
    Route::post('galerikategori', 'admin\GaleriKategoriController@galerikatkayit');
    Route::get('galerikatduzen/{id}', 'admin\GaleriKategoriController@galerikatduzen');
    Route::post('galerikatduzen/{id}', 'admin\GaleriKategoriController@galerikatduzenle');
    Route::get('galerikatsil/{id}', 'admin\GaleriKategoriController@galerikatsil');
    Route::get('galeriekle', 'admin\GaleriController@galeriekle');
    Route::post('galeriekle', 'admin\GaleriController@galerikayit');
    Route::get('galeriduzen', 'admin\GaleriController@galeriliste');
    Route::get('galeriduzen/{id}', 'admin\GaleriController@coklugaleriekle');
    Route::post('galeriduzen/{id}', 'admin\GaleriController@modalgaleri');
    Route::get('galeriduzenleme/{id}', 'admin\GaleriController@galeriduzenleme');
    Route::post('galeriduzenleme/{id}', 'admin\GaleriController@galeriduzenlemekayit');
    Route::get('coklugaleriduzen/{galeriid}', 'admin\GaleriController@galericoklu');
    Route::post('coklugaleriresimduzenle/{id}', 'admin\GaleriController@coklugaleriresimkayit');
    Route::get('galeriresimsil/{id}', 'admin\GaleriController@coklugaleriresimsil');
    Route::get('galerisil/{id}', 'admin\GaleriController@galerisil');
    //Sipariş rotaları
    Route::get('siparis', 'admin\SiparislerController@siparisgor');
    Route::get('siparissil/{id}', 'admin\SiparislerController@siparissil');
    Route::post('siparisduzen/{id}', 'admin\SiparislerController@siparisduzen');
    Route::get('siparisduzenle/{id}', 'admin\SiparislerController@siparisduzenle');
    Route::post('siparisduzenle/{id}', 'admin\SiparislerController@siparisduzenkayit');
    //Modül rotaları
    Route::get('moduller', 'admin\ModullerController@modulliste');
    Route::post('moduller/{id}', 'admin\ModullerController@modulkayit');
    //Ekstra Alan Rotaları
    Route::get('ekstraalan', 'admin\EkstraAlanController@ekstraalan');
    Route::post('ekstraalan', 'admin\EkstraAlanController@ekstrakayit');
    Route::get('ekstraalanduzen/{id}', 'admin\EkstraAlanController@ekalangor');
    Route::post('ekstraalanduzen/{id}', 'admin\EkstraAlanController@ekstraduzen');
    Route::get('ekstraalansil/{id}', 'admin\EkstraAlanController@eksil');
    //Mail listesi
    Route::get('maillistesi', 'admin\GenelAyarController@maillist');
    Route::get('maillersil/{id}', 'admin\GenelAyarController@mailsil');
    Route::post('maillistesi', 'admin\GenelAyarController@maillist');
    Route::post('mailserver', 'admin\YoneticiController@mailserverpost');

    Route::get('onbellek', 'admin\GenelAyarController@onbelleksil');
    //ckeditör resim yükleme eklentisi
    Route::get('elfinder/ckeditor', '\Barryvdh\Elfinder\ElfinderController@showCKeditor4');
});