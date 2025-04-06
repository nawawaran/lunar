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
    ];

    protected $casts = [
        'pin' => 'hashed',
    ];


    public function owner(): MorphTo
    {
        return $this->morphTo();
    }
}
