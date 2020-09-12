<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{ 
    protected $fillable = [
        'whoAreWe', 'our', 'whatWeDo', 'whyChooseUs', 'saveTimeWithUs', 
    ];
}
