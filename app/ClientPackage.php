<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class ClientPackage extends Model
{
    //
    protected $fillable = ['user_id','category_id','package_id','status'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function package(){
        return $this->belongsTo(Package::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function scopeClient($query, $userID){
    	return $query->where('user_id',$userID);
    }
    public function scopeInActive($query){
        return $query->where('status','Inactive');
    }
    public function scopeActive($query){
        return $query->where('status','Active');
    }
}
