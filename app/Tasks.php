<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable = ['group_id', 'name', 'r_o_link', 'status'];
}
