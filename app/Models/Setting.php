<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
        'type',
        'description',
    ];

    /**
     * Get setting value by key
     */
    public static function get($key, $default = null)
    {
        $setting = self::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    /**
     * Set setting value by key
     */
    public static function set($key, $value, $type = 'text', $description = null)
    {
        return self::updateOrCreate(
            ['key' => $key],
            [
                'value' => $value,
                'type' => $type,
                'description' => $description,
            ]
        );
    }

    /**
     * Get image URL for image type settings
     */
    public function getImageUrlAttribute()
    {
        if ($this->type === 'image' && $this->value) {
            if (filter_var($this->value, FILTER_VALIDATE_URL)) {
                return $this->value;
            }
            
            $imagePath = 'storage/' . $this->value;
            $fullPath = public_path($imagePath);
            
            if (file_exists($fullPath)) {
                return asset($imagePath);
            }
            
            $altPath = storage_path('app/public/' . $this->value);
            if (file_exists($altPath)) {
                return asset('storage/' . $this->value);
            }
        }
        
        return null;
    }
}
