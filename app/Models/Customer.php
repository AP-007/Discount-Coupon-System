<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'phone',
        'coupon_id'
    ];

    public function coupons() {
        return $this->belongsTo(Coupon::class, 'coupon_id');
    }
}
