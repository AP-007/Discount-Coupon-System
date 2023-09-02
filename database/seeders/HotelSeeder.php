<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = [
            'name' => 'Hotel1',
            'email' => 'hotel1@gmail.com',
            'description' => 'Description is the key to success.',
            'municipality' => 'Municipality 1',
            'pan' => 5672531,
            'ward_no' => 12,
            'tole' => 'nice tole',
            'district_id' => 1,
            'province_id' => 1,
        ];
        
        Hotel::insert($hotels);
    }
}
