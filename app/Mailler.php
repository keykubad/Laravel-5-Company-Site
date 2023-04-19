<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailler extends Model {

  	protected $table = 'mailler';

    protected $fillable = ['email'];

    protected $hidden = ['password', 'remember_token'];

}
