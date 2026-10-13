<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'category', 'code', 'name', 'description', 'unit', 'price', 'cost',
        'loss_percent', 'material', 'active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'cost' => 'decimal:2',
        'loss_percent' => 'decimal:2',
        'active' => 'boolean',
    ];
}
