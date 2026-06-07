<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_title_ar',
        'hero_subtitle_ar',
        'about_title_ar',
        'about_desc_ar',
    ];
}
