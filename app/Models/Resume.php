<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Resume extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 
        'slug',
        'experience_title', 
        'experience_description', 
        'experience_start_date', 
        'experience_end_date', 
        'education_title', 
        'education_description', 
        'education_start_date', 
        'education_end_date', 
        'professional_skills', 
        'languages'
    ];

    protected $dates = [
        'experience_start_date', 
        'experience_end_date', 
        'education_start_date', 
        'education_end_date'
    ];
}
