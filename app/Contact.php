<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable =[
    //
    'title',
    'first_name',
    'last_name',
    'email',
    'phone',
    'address',
    'date'
    ];
}
