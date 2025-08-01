<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Staff extends Model
{
    protected $table = 'staff';
    protected $guarded = ['*'];
    public function classes(): BelongsToMany
    {
        return $this->belongsToMany(Classname::class, 'subject_teacher_class', 'staff_id', 'class_id');
    }

    public function subjects():BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'subject_teacher_class', 'staff_id', 'subject_id');
    }




}
