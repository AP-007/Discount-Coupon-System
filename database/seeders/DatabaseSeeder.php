<?php

namespace Database\Seeders;

use App\Models\Coupon;
use App\Models\District;
use App\Models\Hotel;
use App\Models\Province;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(HotelSeeder::class);
        $this->call(ProvinceSeeder::class);
    }
}
