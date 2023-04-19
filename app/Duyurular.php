<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Duyurular extends Model {

    protected $table = 'duyurular';

    protected $fillable = ['duyurudil', 'duyurubaslik', 'duyuruslug','duyuruicerik','duyurukeyw','duyurudesc'];
    //tarih formatı düzeltme
	public function tarih() {
		return $this->updated_at->format('d.m.Y');
		 
	}
}
