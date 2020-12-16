<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function category(){
    	return $this->hasMany('App\category');
    }

    public function clientPackage(){
    	return $this->hasMany(ClientPackage::class);
    }

    public function getRouteKeyName(){
    	return 'package_alias';
    }
}
