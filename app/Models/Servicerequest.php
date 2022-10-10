<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicerequest extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'businessname',
        'email',
        'phonenumber',
        'url',
        'businesstype',
        'budget',
        'country',
        'details',
        'datecontacted',
        'contactmethod',
        'won',
        'in_crm',
    ];
}
