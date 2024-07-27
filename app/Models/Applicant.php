<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'profile_picture',
        'password',
        'position',
        'gender',
        'dob',
        'height',
        'weight',
        'address',
        'why',
        'social_links'
    ];
}
