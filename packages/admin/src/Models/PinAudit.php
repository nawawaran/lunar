<?php

namespace Lunar\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

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

    public function owner(): MorphTo
    {
        return $this->morphTo();
    }
}
