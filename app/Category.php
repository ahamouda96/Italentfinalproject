<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // public function posts() {
    //     return $this->hasMany('App\Post');
    // }
    // public function user() {
    //     return $this->belongsTo('App\User');
    // }
}
