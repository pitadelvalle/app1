<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }
    public function status(){
        return $this->belongTo('App\Activity\Status');
    }
    public function user(){
        return $this-> belongsTo('App\User');
    }
}
