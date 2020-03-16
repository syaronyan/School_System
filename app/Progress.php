<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $table = 'progress';
    protected $fillable = ['student_id', 'tasks_id', 'check_flag'];
}
