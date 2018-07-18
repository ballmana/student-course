<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    public function tasks()
    {
        return $this->belongsToMany('App\Models\Task');
    }
}
