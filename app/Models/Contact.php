<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'slug', 
        'name', 
        'email', 
        'phone_number', 
        'message'
    ];
}
