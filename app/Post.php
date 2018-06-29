<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
        'title','content','user_id','photo_id','category_id'
   ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function categorie(){
        return $this->belongsTo("App\Categorie");
    }

    public function comments(){
        return $this->hasMany("App\Comment");
    }
}
