<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    protected $fillable = [
        'report_file',
        'user_id',
        'course_id'
    ];
}
