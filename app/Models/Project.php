<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 
        'title', 
        'description', 
        'image_path', 
        'project_link', 
        'slug'
    ];

    protected $casts = [
        'image_path' => 'array',
    ];

    // Method to get thumbnail image URL
    public function getThumbnailAttribute()
    {
        if ($this->image_path) {
            $imageUrls = json_decode($this->image_path);

            if (!empty($imageUrls) && is_array($imageUrls) && count($imageUrls)) {
                return Storage::url($imageUrls[0]);
            }
        }

        return 'https://via.placeholder.com/300x400';
    }
}
