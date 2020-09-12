<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{ 
    protected $fillable = [
        'socials_id', 'contact_id', 'company_id', 
    ];
    
    public function socials(){
        return $this->hasMany(Social::class);
    }

    public function contact(){
        return $this->hasOne(Contact::class);
    }
    public function company(){
        return $this->hasOne(Company::class);
    }

}
