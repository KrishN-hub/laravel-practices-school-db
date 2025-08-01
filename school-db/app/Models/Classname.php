<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classname extends Model
{
    protected $table = 'class_name';
    protected $guard = ['*'];
    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'class_id');
    }
    public function subjects()
    {
        return $this->hasMany(Subject::class, 'subject_class','subject_id', );
    }
    public function staff()
    {
        return $this->belongsToMany(Staff::class, 'subject_teacher_class', 'class_id', 'staff_id');;
    }


}
