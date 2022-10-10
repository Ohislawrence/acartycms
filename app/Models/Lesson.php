<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'topic_id',
        'slug',
        'title',
        'lesson',
        'is_video',
        'is_reading',
        'is_quiz',
        'is_assignment',
        'quiz_id',
        'video_link',
    ];
}
