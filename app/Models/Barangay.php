<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    protected $fillable = [
        'name',
        'municipality',
        'population',
        'barangay_captain',
        'is_coastal',
        'landmark',
    ];

    protected function casts(): array
    {
        return [
            'population' => 'integer',
            'is_coastal' => 'boolean',
        ];
    }
}
