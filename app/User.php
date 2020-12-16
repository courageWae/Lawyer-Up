<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','phone','photo','insurer','address','house_address','education','experience','personal_statement','type_of_lawyer','alias','user_name'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
       return $this->belongsTo('App\Role');
    }

    public function package(){
        return $this->hasMany('App\ClientPackage');
    }
    
    public function booking(){
        return $this->hasMany('App\Booking');
    }

    public function invoice(){
        return $this->hasMany(Invoice::class);
    }

    public function scopeAdmin($query){
        return $query->where('role_id',1);
    }
    public function scopeInsurer($query){
        return $query->where('role_id',2);
    }
    public function scopeLawyer($query){
        return $query->where('role_id',3);
    }
    public function scopeClient($query){
        return $query->where('role_id',4);
    }

    public function scopeInsurerClient($query, $insurerID){
        return $query->where('insurer',$insurerID);
    }

    public function getRouteKeyName(){
        return 'alias';
    }
}
