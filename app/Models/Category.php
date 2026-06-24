<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'img',
        'description'
    ];
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'cat_id');
    }

    public function specifications()
    {
        return $this->hasMany(CategorySpecification::class)->orderBy('sort_order')->orderBy('id');
    }
}
