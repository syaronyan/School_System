<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = ['name', 'email','ent_date','course', 'password', 'status'];
}
