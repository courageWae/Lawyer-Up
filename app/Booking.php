<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = ['user_id','lawyer_id','status','timeslot','date','credits'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

}
