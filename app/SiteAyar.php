<?php namespace App;
/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */
use Illuminate\Database\Eloquent\Model;

class SiteAyar extends Model {

    protected $table = 'siteayar';

    protected $fillable = ['durum', 'siteadi', 'sitekeyw', 'sitedesc','sitetel','siteadres'];

    protected $hidden = ['password', 'remember_token'];

}
