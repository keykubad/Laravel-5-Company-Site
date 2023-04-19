<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Urunler extends Model {
    protected $table = 'urunler';

    protected $fillable = ['urunkatid', 'urunadi', 'urunslug', 'urunkodu','urunetiket','urundesc','urunicerik','urunresim','urunfiyati','urundurum','urundil'];
    //kategori id isine göre bilgilerdeki katid eşleştirip kategori ismini alıyoruz ilişkilendirme
    public function kategori(){
        return $this->belongsTo('App\Sayfalar','urunkatid');

    }
    public function urunresim(){
        return $this->belongsTo('App\Urunresim','id');

    }

}
