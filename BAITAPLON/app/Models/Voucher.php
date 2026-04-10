<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Voucher extends Model
{
    protected $fillable = [
        'code',
        'discount_type',
        'discount_value',
        'min_order',
        'max_discount',
        'quantity',
        'start_date',
        'end_date',
        'status',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
