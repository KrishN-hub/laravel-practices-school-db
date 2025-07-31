<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classname extends Model
{
    protected $table = 'class_name';
    protected $guard = ['*'];

    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
    }



}
