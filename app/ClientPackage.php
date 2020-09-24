<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientPackage extends Model
{
    //
    protected $fillable = ['client_name','package_name','category','price','status','photo','verification_code','approved_by'];
}
