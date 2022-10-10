<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serivice extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'service',
        'desc',
        'st1',
        'st1desc',
        'st1img',
        'st2',
        'st2desc',
        'stimg',
        'extra',
        'slug',
        'icon',
    ];
}
