<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	protected $fillable = ['name','album_alias'];

    public function photo(){
    	return $this->hasMany(Photo::class);
    }

    public function getRouteKeyName(){
    	return 'album_alias';
    }
}
