<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'number', 'quote_id', 'client_id', 'worksite_id', 'assigned_to', 'status',
        'scheduled_measure', 'scheduled_fabrication', 'scheduled_installation',
        'finished_at', 'warranty_until', 'notes',
    ];

    protected $casts = [
        'scheduled_measure' => 'date',
        'scheduled_fabrication' => 'date',
        'scheduled_installation' => 'date',
        'finished_at' => 'datetime',
        'warranty_until' => 'date',
    ];

    public function quote(): BelongsTo
    {
        return $this->belongsTo(Quote::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function worksite(): BelongsTo
    {
        return $this->belongsTo(Worksite::class);
    }

    public function assignedTo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function scheduleEvents(): HasMany
    {
        return $this->hasMany(ScheduleEvent::class);
    }

    public function financialTransactions(): HasMany
    {
        return $this->hasMany(FinancialTransaction::class);
    }

    public function media(): HasMany
    {
        return $this->hasMany(MediaAttachment::class, 'mediable_id')
            ->where('mediable_type', self::class);
    }
}
