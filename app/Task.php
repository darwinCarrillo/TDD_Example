<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // 1
    protected $fillable = ['body', 'user_id'];
}
