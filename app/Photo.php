<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['id','name','created_at','updated_at'];
    protected $uploads = '/files/';




    public function getNameAttribute($photo)
     {
     	return $this->uploads . $photo;
     }
    public function user()
    {
    	return $this->hasMany('App\Photo','name');
    }    
}
