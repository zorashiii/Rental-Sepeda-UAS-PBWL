<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'cust_id',
        'spd_id',
        'tgl_rent',
        'tgl_kembali',
        'hari',
        'total_harga',
        'user_id'
    ];

    public function bicycle(): HasOne
    {
        return $this->hasOne(Bicycle::class, 'id', 'spd_id');
    }

    public function customer(): HasOne
    {
        return $this->hasOne(Customer::class, 'id', 'cust_id');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
