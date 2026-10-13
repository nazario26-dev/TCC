<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Worksite extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id', 'name', 'type', 'address', 'city', 'state', 'zip',
        'reference', 'lat', 'lng', 'contact_name', 'contact_phone', 'status', 'notes',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function quotes(): HasMany
    {
        return $this->hasMany(Quote::class);
    }

    public function workOrders(): HasMany
    {
        return $this->hasMany(WorkOrder::class);
    }

    public function media(): HasMany
    {
        return $this->hasMany(MediaAttachment::class, 'mediable_id')
            ->where('mediable_type', self::class);
    }
}
