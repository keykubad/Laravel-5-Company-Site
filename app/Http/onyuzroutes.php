<?php
/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\GenelAyar;

//Cache Özelliğini açıp kapatma 
$cekayar		=GenelAyar::find(1);
if($cekayar->cachedurum==1){
Route::filter('cache', function($route, $request, $response = null)
{
    $key = 'route-'.Str::slug(Request::url());
    if(is_null($response) && Cache::has($key))
    {
        return Cache::get($key);
    }
    elseif(!is_null($response) && !Cache::has($key))
    {
        Cache::put($key, $response->getContent(), 30);
    }
});
}else{
}
//Tüm rotaların grupları
Route::group(['before' => 'cache', 'after' => 'cache','prefix' => '/'], function()
{
	Route::get('/', 'onyuz\IndexController@trindex');
	Route::get('/sayfa/{sayfaurl}', 'onyuz\ContentController@tricerik')->where('sayfaurl', '[A-Za-z-]+');
	Route::get('sitemap.xml', 'onyuz\SitemapController@sitemap');
	Route::post('/arama', 'onyuz\FormController@arama');
	Route::get('/arama', 'onyuz\FormController@arama');
	Route::post('iletisimkayit', 'onyuz\AllContentController@mail');
	Route::get('/sayfa/{sayfaurl}/{katid}', 'onyuz\CategoryController@category');
	Route::get('urun/{id}/{urunslug}', 'onyuz\AllContentController@trurunicerik');//urun içerik yolu
	Route::get('siparis/{id}/{urunslug}', 'onyuz\AllContentController@trsiparissayfa');//siparis sayfa yolu
	Route::post('siparis/{id}/{urunslug}', 'onyuz\AllContentController@sipariskayit');//siparis kayıt yolu
	//buradan aşağısı son kontrolle dil ataması yapılacak
	Route::get('galeri/{id}/{galerislug}', 'onyuz\GalleryDetailController@trgaleriicerik');//galeri içerik yolu
	Route::get('video/{id}/{videoslug}', 'onyuz\VideoDetailController@trvideoicerik');//video içerik yolu
	Route::get('haber/{id}/{haberslug}', 'onyuz\ContentController@habericerik');//haber içerik yolu
	Route::get('duyuru/{id}/{duyuruslug}', 'onyuz\ContentController@duyuruicerik');//duyuru içerik yolu
	Route::post('/mailkayit', 'onyuz\FormController@mailal');
	Route::post('/ikgonder', 'onyuz\FormController@mailgit');
	
});
Route::group(['before' => 'cache', 'after' => 'cache','prefix' => '/en'], function()
{
	Route::get('/', 'onyuz\IndexController@enindex');
	Route::get('/sayfa/{sayfaurl}', 'onyuz\ContentController@enicerik')->where('sayfaurl', '[A-Za-z-]+');
	Route::get('/sayfa/{sayfaurl}/{katid}', 'onyuz\CategoryController@encategory');
	Route::get('urun/{id}/{urunslug}', 'onyuz\AllContentController@enurunicerik');//urun içerik yolu
	Route::get('haber/{id}/{haberslug}', 'onyuz\ContentController@enhabericerik');//haber içerik yolu
	Route::get('galeri/{id}/{galerislug}', 'onyuz\GalleryDetailController@engaleriicerik');//galeri içerik yolu
	Route::get('video/{id}/{videoslug}', 'onyuz\VideoDetailController@envideoicerik');//video içerik yolu
	Route::get('duyuru/{id}/{duyuruslug}', 'onyuz\ContentController@enduyuruicerik');//duyuru içerik yolu
	Route::get('siparis/{id}/{urunslug}', 'onyuz\AllContentController@ensiparissayfa');//siparis sayfa yolu
});
Route::group(['before' => 'cache', 'after' => 'cache','prefix' => '/de'], function()
{
	Route::get('/', 'onyuz\IndexController@deindex');
	Route::get('/sayfa/{sayfaurl}', 'onyuz\ContentController@deicerik')->where('sayfaurl', '[A-Za-z-]+');
	Route::get('/sayfa/{sayfaurl}/{katid}', 'onyuz\CategoryController@decategory');
	Route::get('urun/{id}/{urunslug}', 'onyuz\AllContentController@deurunicerik');//urun içerik yolu
	Route::get('haber/{id}/{haberslug}', 'onyuz\ContentController@dehabericerik');//haber içerik yolu
	Route::get('galeri/{id}/{galerislug}', 'onyuz\GalleryDetailController@degaleriicerik');//galeri içerik yolu
	Route::get('video/{id}/{videoslug}', 'onyuz\VideoDetailController@devideoicerik');//video içerik yolu
	Route::get('duyuru/{id}/{duyuruslug}', 'onyuz\ContentController@deduyuruicerik');//duyuru içerik yolu
	Route::get('siparis/{id}/{urunslug}', 'onyuz\AllContentController@desiparissayfa');//siparis sayfa yolu
});
Route::group(['before' => 'cache', 'after' => 'cache','prefix' => '/fr'], function()
{
	Route::get('/', 'onyuz\IndexController@frindex');
	Route::get('/sayfa/{sayfaurl}', 'onyuz\ContentController@fricerik')->where('sayfaurl', '[A-Za-z-]+');
	Route::get('/sayfa/{sayfaurl}/{katid}', 'onyuz\CategoryController@frcategory');
	Route::get('urun/{id}/{urunslug}', 'onyuz\AllContentController@frurunicerik');//urun içerik yolu
	Route::get('haber/{id}/{haberslug}', 'onyuz\ContentController@frhabericerik');//haber içerik yolu
	Route::get('galeri/{id}/{galerislug}', 'onyuz\GalleryDetailController@frgaleriicerik');//galeri içerik yolu
	Route::get('video/{id}/{videoslug}', 'onyuz\VideoDetailController@frvideoicerik');//video içerik yolu
	Route::get('duyuru/{id}/{duyuruslug}', 'onyuz\ContentController@frduyuruicerik');//duyuru içerik yolu
	Route::get('siparis/{id}/{urunslug}', 'onyuz\AllContentController@frsiparissayfa');//siparis sayfa yolu
});