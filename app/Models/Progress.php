<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $fillable = [
        'title',
        'description',
        'due_date',
        'course_id',
    ];
}
