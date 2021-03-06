<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
     protected $fillable =[
        'file'
     ];

     public $directory = "/images/";

     public function imageable() {
        return $this->morphTo();
     }

     public function getFileAttribute($file){
         return $this->directory.$file;
     }

}

