<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSource extends Model
{
    //
    public function source(){
        return $this->belonsTo('App\ContactSource');
    }
    public function status(){
        return $this->belongsTo('App\ContactStatus');
    }
    public function accounts(){
        
    }
}
