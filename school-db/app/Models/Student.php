<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $guarded = ['*'];
    public function class()
    {
        return $this->belongsTo(Classname::class, 'class_id');
    }





}