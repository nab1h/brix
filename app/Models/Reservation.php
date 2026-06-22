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
    ];
}
