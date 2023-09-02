<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use App\Models\Customer;
use App\Models\Hotel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public $hotels;
    public $coupons;
    public $active_coupons;
    public $customers;

    public function mount() {
        $this->hotels = DB::table('hotels')->count();
        $this->coupons = DB::table('coupons')->count();
        $this->active_coupons = DB::table('coupons')
            ->where([
            ['end_date', '>=', today()],
            ['start_date', '<=', today()],
            ['no_of_users', '>', 0]
            ])->count();
        $this->customers = DB::table('customers')->count();
    }

    public function render()
    {
       
        return view('livewire.admin.dashboard');
    }
}
