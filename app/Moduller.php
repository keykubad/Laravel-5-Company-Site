<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Moduller extends Model {

	protected $table = 'moduller';

    protected $fillable = ['moduladi', 'durum'];
    public function modul(){
        return $this->belongsTo('App\Sayfalar','modulid');

    }

}
