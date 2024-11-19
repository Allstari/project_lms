<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluations extends Model
{
    protected $fillable = [
        'score',
        'feedback',
        'user_id',
        'course_id'
    ];
}
