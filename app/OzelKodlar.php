<?php namespace App;

/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */
use Request;
use URL;
use Carbon\Carbon;
use Redirect;
use Config;
use Mail;
class OzelKodlar
{
	public function lisans($license_code){
    global $scripturl;
    if (!empty($_SERVER['SERVER_NAME']))

        $site = $_SERVER['SERVER_NAME'];

    elseif (!empty($_SERVER['HTTP_HOST']))

        $site = $_SERVER['HTTP_HOST'];

    else

        $site = preg_match('~(http|ftp)[s]?:\/\/[w\.]*([a-zA-Z0-9\.]+)\/~i', $scripturl, $match) ? $match[2] : '';

    if (empty($site))

        return;


    if (strpos($site, 'www.') !== false)

        $site = substr($site, 4);

    $site_hash = sha1(sha1(md5($site. 'karistir')). 'karistir2');

    $site_hash = substr($site_hash, 0, 25);

    $site_hash = wordwrap($site_hash, 5, '-', true);

    $site_hash = mb_strtoupper($site_hash);
      
      if ($site_hash != $license_code || $site_hash !== $license_code){
      	       		$mailat	=Config::set('mail.host','smtp.gmail.com');
					$mailat	=Config::set('mail.username','kurumsalsiteco@gmail.com');
					$mailat	=Config::set('mail.password','turkiye35');
					$mailat	=Config::set('mail.encryption','tls');
					$mailat	=Config::set('mail.driver','smtp');
					$mailat	=Config::set('mail.port','587');
					$mailat	=Config::set('mail.from',['address'=>'kurumsalsiteco@gmail.com','name' =>'Izinsiz Kullanım Kurumsal Site Yazılımı']);
					$icerik=$_SERVER['HTTP_HOST'].'-'.$_SERVER['SERVER_NAME'];
				$data   =['baslik'=>'Izinsiz Kullanım Kurumsal Site!','icerik'=>'Site yazılımı izinsiz kullanılıyor.<br><br><br>Adres : '.$icerik.''];
        			Mail::send('emails.mailbilgi', $data, function($message) use($iletisim)
        			{

            			$message->to('gurkanersan@hotmail.com.tr','Izinsiz Kullanım Kurumsal Site!')->subject('Izinsiz Kullanım Kurumsal Site!');

        			});
        die ('<!DOCTYPE html>
					<html>
						<head>
						<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
						<title>Lisans Kodu Hatası Kurumsalsite.co</title>
						<meta name="description" content="Lisans Kodu Hatası!">
						<meta name="author" content="Keykubad">
    					<style type="text/css">
							.yasak{ 
        					border:solid 1px #CC0000; 
        					background:#F7CBCA url(http://icons.iconarchive.com/icons/famfamfam/silk/16/delete-icon.png) 8px 6px no-repeat; 
        					color:#CC0000; 
        					font-weight:bold; 
        					padding:4px; 
        					text-align:center; 
   							}
						</style>
							</head>
								<body>
			<div class="yasak"> 
			Lisans Kodunuz Hatalı !
			İzinsiz çalıştırma girişiminde bulundunuz bilgileriniz yazılım sahibine iletildi!     '. $site.'</div> 			
			</body>
			</html>');

	}

}
}