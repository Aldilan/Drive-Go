<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Car extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    protected $fillable = [
        'brand_id',
        'model',
        'license_number',
        'rate',
        'stock',
    ];
}
