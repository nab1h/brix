<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'status',
        'email',
        'brand',
        'category',
        'category_id',
        'specifications',
        'product_length',
        'product_width',
        'product_height',
        'paper_weight',
        'material',
        'quantity',
        'brand_logo',
        'notes',
        'is_archive',
        'is_delete',
    ];

    protected $casts = [
        'reservation_time' => 'datetime:H:i',
        'product_length' => 'decimal:2',
        'product_width' => 'decimal:2',
        'product_height' => 'decimal:2',
        'paper_weight' => 'integer',
        'quantity' => 'integer',
        'specifications' => 'array',
    ];

    public function service()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getDisplaySpecificationsAttribute(): array
    {
        if (! empty($this->specifications)) {
            return $this->specifications;
        }

        $legacy = [];
        $dimensions = array_filter([$this->product_length, $this->product_width, $this->product_height], fn ($value) => $value !== null);
        if ($dimensions) {
            $legacy[] = ['label' => 'المقاسات', 'value' => implode(' × ', $dimensions), 'unit' => 'سم'];
        }
        if ($this->paper_weight !== null) {
            $legacy[] = ['label' => 'وزن الورق', 'value' => $this->paper_weight, 'unit' => 'جرام'];
        }
        if ($this->material) {
            $legacy[] = ['label' => 'الخامة', 'value' => $this->material, 'unit' => null];
        }
        if ($this->quantity !== null) {
            $legacy[] = ['label' => 'الكمية', 'value' => number_format($this->quantity), 'unit' => 'قطعة'];
        }

        return $legacy;
    }
}
