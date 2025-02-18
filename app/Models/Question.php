<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'id',
        'title',
        'content',
        'location',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function answer() {
        return $this->hasMany(Answer::class);
    }
}
