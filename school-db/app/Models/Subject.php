<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model
{
    protected $table = 'subject';
    protected $guarded = ['*'];
    public function classes():BelongsToMany
    {
        return $this->belongsToMany(Classname::class, 'subject_class', 'subject_id', 'class_id');
    }

    public function staffs():BelongsToMany
    {
        return $this->belongsToMany(Staff::class, 'subject_teacher_class', 'subject_id', 'staff_id');

    }

    public function students():BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'class_id');
    }





}
