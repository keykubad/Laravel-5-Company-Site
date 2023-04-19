<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class GenelAyar extends Model {
    protected $table = 'genelayar';

    protected $fillable = ['sitelogo', 'sitesosyal', 'siteanaliz','sitegooglemap','mailhost','mailkullanici','mailsifre','sifretip','driver','port'];

    protected $hidden = ['password', 'remember_token'];
}
