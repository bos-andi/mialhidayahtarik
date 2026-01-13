<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'image',
        'author',
        'category',
        'published_at',
        'is_published',
        'views',
    ];

    protected $casts = [
        'published_at' => 'date',
        'is_published' => 'boolean',
        'views' => 'integer',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            if (empty($news->slug)) {
                $news->slug = Str::slug($news->title);
            }
            if (empty($news->published_at)) {
                $news->published_at = now();
            }
        });

        static::updating(function ($news) {
            if ($news->isDirty('title') && empty($news->slug)) {
                $news->slug = Str::slug($news->title);
            }
        });
    }

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
            
            return asset('assets/img/blog/ca-blog-1.1.png');
        }
        
        return asset('assets/img/blog/ca-blog-1.1.png');
    }

    /**
     * Scope for published news
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope for recent news
     */
    public function scopeRecent($query, $limit = 6)
    {
        return $query->orderBy('published_at', 'desc')->limit($limit);
    }
}
