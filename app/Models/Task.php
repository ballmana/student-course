<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $timestamps = false;
    public function employees()
    {
        return $this->belongsToMany('App\Models\Employee');
    }
}
