<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
        'title',
        'description',
        'duration',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
