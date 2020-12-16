<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function package(){
    	return $this->belongsTo('App\Package');
    }

    public function clientPackage(){
    	return $this->hasMany(ClientPackage::class);
    }

    public function getRouteKeyName(){
    	return 'category_alias';
    }
}
