<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function hotels() {
        return $this->belongsToMany(Hotel::class);
    }
    public function customers() {
        return $this->hasMany(Customer::class);
    }
}


