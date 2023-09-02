<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function provinces() {
        return $this->belongsTo(Province::class);
    }

    public function districts() {
        return $this->hasMany(District::class);
    }
}
