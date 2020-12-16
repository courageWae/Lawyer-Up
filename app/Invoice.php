<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $fillable = ['user_id','category_id','status','package_id','total','invoice_alias'];

    public function getRouteKeyName(){
    	return "invoice_alias";
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
