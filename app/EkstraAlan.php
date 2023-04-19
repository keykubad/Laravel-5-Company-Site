<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EkstraAlan extends Model {
    protected $table = 'ekstraalan';

    protected $fillable = ['adi', 'durum','alan','dil'];

    protected $hidden = ['password', 'remember_token'];
}
