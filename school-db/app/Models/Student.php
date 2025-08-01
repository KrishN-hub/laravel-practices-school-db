<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model

{
    protected $table = 'student';
    protected $guarded = ['*'];
    public function class():BelongsTo
    {
        return $this->belongsTo(Classname::class, 'class_id', );
    }





}