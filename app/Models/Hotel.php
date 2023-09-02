<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function province() {
        return $this->belongsTo(Province::class);
    }

    public function district() {
        return $this->belongsTo(District::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }

    public function coupons() {
        return $this->belongsToMany(Coupon::class);
    }
}
