<?php namespace App;
/*
 * www.keykubad.com
 * Kodlayan : Keykubad - Gürkan Ersan
 * Kurumsal Site Projesi
 * */
use Illuminate\Database\Eloquent\Model;
class Sayfalar extends Model {

    protected $table = 'sayfalar';

    protected $fillable = ['katid', 'sayfadil', 'sayfaadi', 'sayfaicerik', 'sayfakeyw', 'sayfadesc','modulid'];

    protected $guarded = ['id'];

    public function modul(){
        return $this->belongsTo('App\Moduller','modulid');

    }
    
    public function kategori(){
        return $this->belongsTo('App\Sayfalar','katid');

    }
	public function submenus()
	{
    
	    return $this->hasMany('App\Sayfalar', 'katid','id');

	}
    public function scopeWhereMainmenu($query)
    {
        return $query->wherekatid(0);
    }
}
