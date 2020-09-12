<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{ 
    protected $fillable = [
        'name', 'slug', 'shortDescription','longDescription','icon','image',
    ];
    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
}
