<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Social extends Model
{ 
    protected $fillable = [
        'icon', 'name', 'link',
    ];
    public function page(){
        return $this->belongsTo(Page::class);
    }
}
