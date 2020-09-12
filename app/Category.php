<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{ 
    protected $fillable = [
        'name', 'slug', 'description','image',
    ];
    public function portfolios(){
        return $this->hasMany(Portfolio::class);
    }
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
