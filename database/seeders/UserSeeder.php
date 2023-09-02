<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'name' => 'Admin',
            'phone' => 9873726387,
            'role' => 1,
            'email' => 'admin@example.com',
            'hotel_id' => 1,
            'password' => Hash::make('password'),
            'current_team_id' => 1,
        ];
        
        User::create($users);
    }
}
