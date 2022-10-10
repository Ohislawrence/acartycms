<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'title',
        'slug',
        'user_id',
        'desc',
        'cert',
        'cost',
        'image',
        'coursecat_id',
        'offered_by',
    ];



    public function coursecat()
    {
        return $this->belongsTo('App\Models\Coursecat');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'offered_by');
    }
}
