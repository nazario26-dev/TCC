<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StockItem extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'name', 'unit', 'cost', 'qty', 'min_qty', 'supplier'];

    protected $casts = [
        'cost' => 'decimal:2',
        'qty' => 'decimal:3',
        'min_qty' => 'decimal:3',
    ];

    public function movements(): HasMany
    {
        return $this->hasMany(StockMovement::class);
    }
}
