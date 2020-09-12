<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{ 
    protected $fillable = [
        'category_id','name', 'slug', 'description','skills','client','url', 'image',
    ];
    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
