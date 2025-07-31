<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subject';
    protected $guarded = ['*'];
    public function subjects()
    {
        return $this->hasMany(Subject::class, 'subject_class','class_id', 'subject_id');
    }




}
