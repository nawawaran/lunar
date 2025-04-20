<?php

namespace Lunar\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'owner_type',
        'pin',
        'failed_attempts',
        'last_failed_attempt',
        'locked_until',
        'expires_at',
    ];

    protected $casts = [
        'pin' => 'hashed',
        'locked_until' => 'datetime',
        'last_failed_attempt' => 'datetime',
        'expires_at' => 'datetime',
    ];


    public function owner(): MorphTo
    {
        return $this->morphTo();
    }
}
