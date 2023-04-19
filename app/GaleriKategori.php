<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleriKategori extends Model {
    protected $table = 'galerikategori';

    protected $fillable = ['galkatid', 'galerikatadi', 'galerikatdil','galerikatslug'];
    //kategori id isine göre bilgilerdeki katid eşleştirip kategori ismini alıyoruz ilişkilendirme
    public function kategori(){
        return $this->belongsTo('App\Sayfalar','katid');

    }
}
