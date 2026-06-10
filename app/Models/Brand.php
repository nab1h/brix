<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'url',
        'years',
        'info'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function booted()
    {
        static::saving(function ($brand) {
            if (empty($brand->slug) || $brand->isDirty('name')) {
                $brand->slug = Str::slug($brand->name);

                $count = Brand::where('slug', 'like', $brand->slug . '%')
                    ->where('id', '!=', $brand->id)
                    ->count();

                if ($count > 0) {
                    $brand->slug .= '-' . ($count + 1);
                }
            }
        });
    }
    public function portfolios() {
         return $this->hasMany(Portfolio::class);
    }
}
