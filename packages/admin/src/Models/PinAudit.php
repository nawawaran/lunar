<?php

namespace Lunar\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Lunar\Admin\Enums\PinAuditAction;

class PinAudit extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'owner_type',
        'action',
        'latitude',
        'longitude',
        'ip_address',
        'user_agent',
        'device_id',
    ];

    protected function casts(): array
    {
        return [
            'action' => PinAuditAction::class
        ];
    }

    public function owner(): MorphTo
    {
        return $this->morphTo();
    }
}
