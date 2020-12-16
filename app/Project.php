<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name','content','status','project_alias','photo','date'];

    public function scopeCompleted($query){
    	return $query->where('status','completed');
    }

    public function scopeOngoing($query){
    	return $query->where('status','ongoing');
    }

    public function getRouteKeyName(){
    	return 'project_alias';
    }
}
