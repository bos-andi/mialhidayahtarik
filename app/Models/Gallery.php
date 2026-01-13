<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'type',
        'video_url',
        'category',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Get the image URL
     */
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            if (filter_var($this->image, FILTER_VALIDATE_URL)) {
                return $this->image;
            }
            
            $imagePath = 'storage/' . $this->image;
            $fullPath = public_path($imagePath);
            
            if (file_exists($fullPath)) {
                return asset($imagePath);
            }
            
            $altPath = storage_path('app/public/' . $this->image);
            if (file_exists($altPath)) {
                return asset('storage/' . $this->image);
            }
            
            return asset('assets/img/gallery/ca-gallery-1.1.png');
        }
        
        return asset('assets/img/gallery/ca-gallery-1.1.png');
    }

    /**
     * Scope for active galleries
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for ordered galleries
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('created_at', 'desc');
    }
}
