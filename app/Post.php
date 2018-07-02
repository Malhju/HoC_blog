<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
        'title','content','user_id','photo_id','category_id'
   ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function category() {
        return $this->belongsTo("App\Category");
    }

    public function comments() {
        return $this->hasMany("App\Comment");
    }
    
    public function photos() {
        return $this->morphMany('App\Photo', 'imageable');
    }
}
