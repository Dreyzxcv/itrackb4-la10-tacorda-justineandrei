<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barangay extends Model
{
    protected $fillable = [
        'name',
        'municipality_id',
        'population',
        'barangay_captain',
        'is_coastal',
        'landmark',
    ];

    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class, 'municipality_id');
    }

    protected function casts(): array
    {
        return [
            'population' => 'integer',
            'is_coastal' => 'boolean',
        ];
    }
}
