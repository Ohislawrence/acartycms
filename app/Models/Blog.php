<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Blog extends Model implements Viewable
{
    use HasFactory;
    use InteractsWithViews;


    protected $fillable = [
        'title',
        'slug',
        'banner',
        'desc',
        'user_id',
        'category',
    ];



    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function cat()
    {
        return $this->belongsTo('App\Models\Blogcat', 'category', 'id');
    }
}
