<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable = ['name','description', 'category', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Add this:
    protected $appends = ['full_image_url'];

    public function getFullImageUrlAttribute()
    {
        if ($this->image) {
            return url('storage/' . $this->image);
        }
        return null;
    }
}

