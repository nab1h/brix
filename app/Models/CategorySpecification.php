<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategorySpecification extends Model
{
    protected $fillable = [
        'category_id', 'label', 'type', 'unit', 'placeholder',
        'options', 'is_required', 'sort_order',
    ];

    protected $casts = [
        'options' => 'array',
        'is_required' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
