<?php namespace App;
/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */
use Illuminate\Database\Eloquent\Model;

class Siparisler extends Model {

    protected $table = 'siparisler';

    protected $fillable = ['urunidi', 'urunadi', 'adet', 'fiyat','durum','adunvan','email','adres','telefon','mesaj'];
    public function resimcek(){
        return $this->belongsTo('App\Urunler','urunidi');

    }
    protected $hidden = ['password', 'remember_token'];

}
