<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Haberler extends Model {

    protected $table = 'haberler';

    protected $fillable = ['habid', 'haberslug','haberdurum','haberdil',
        'haberbaslik','habericerik','haberdesc','haberkeyw','haberresim'];

    protected $hidden = ['password', 'remember_token'];
    //tarih formatı düzeltme
	public function tarih() {
		return $this->updated_at->format('d.m.Y');
		 
	}
}
