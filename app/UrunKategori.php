<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UrunKategori extends Model {

    protected $table = 'urunkategori';

    protected $fillable = ['ukatid', 'urunkatadi', 'urunkatdil', 'urunkatslug'];

}
