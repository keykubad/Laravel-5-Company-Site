<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model {
    protected $table = 'galeri';
    protected $fillable = ['galerikatid', 'galeribaslik', 'galerislug','galerietiket','galeridesc','galeriicerik','galeriresim','galeridil'];
    //kategori id isine göre bilgilerdeki katid eşleştirip kategori ismini alıyoruz ilişkilendirme
    public function kategori(){
        return $this->belongsTo('App\Sayfalar','galerikatid');

    }
}
