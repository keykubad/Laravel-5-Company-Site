<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {
    protected $table = 'video';
    protected $fillable = ['videoadi', 'videodil', 'videourl', 'videoicerik','videoresim','videodurum','videodesc','videokeyw','videoslug'];
}
