<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'nip',
        'photo',
        'bio',
        'email',
        'phone',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Get the photo URL
     */
    public function getPhotoUrlAttribute()
    {
        if ($this->photo) {
            // Check if photo path is already a full URL
            if (filter_var($this->photo, FILTER_VALIDATE_URL)) {
                return $this->photo;
            }
            
            // Try public/storage path first (after storage:link)
            $photoPath = 'storage/' . $this->photo;
            $fullPath = public_path($photoPath);
            
            if (file_exists($fullPath)) {
                return asset($photoPath);
            }
            
            // Try storage/app/public path
            $altPath = storage_path('app/public/' . $this->photo);
            if (file_exists($altPath)) {
                return asset('storage/' . $this->photo);
            }
            
            // If file doesn't exist, return default
            return asset('assets/img/team/ca-team-1.1.png');
        }
        
        // Return foto default jika tidak ada foto
        return asset('assets/img/team/ca-team-1.1.png');
    }
}
