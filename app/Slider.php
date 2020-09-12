<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{ 
    protected $fillable = [
        'text1', 'text2', 'button1', 'button2', 
    ];
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
