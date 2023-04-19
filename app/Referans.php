<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Referans extends Model {

    protected $table = 'referans';

    protected $fillable = ['refdil', 'refbaslik', 'reficerik','refresim'];

    protected $hidden = ['password', 'remember_token'];

}
