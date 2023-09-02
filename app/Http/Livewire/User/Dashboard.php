<?php

namespace App\Http\Livewire\User;

use App\Models\Coupon;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $coupons = Coupon::where([
            ['end_date', '>=', today()],
            ['start_date', '<', today()],
            ['hotel_id', '=', auth()->user()->hotel_id],
            ['no_of_users', '>', '0']
            ])
        ->get();
        return view('livewire.user.dashboard',compact('coupons'));
    }
}
