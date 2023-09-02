<?php

namespace App\Http\Livewire\Admin\Customer;

use App\Models\Coupon;
use App\Models\Customer;
use Livewire\Component;

class View extends Component
{
    public function render()
    {
        $customers= Customer::with('coupons')->get();
        return view('livewire.admin.customer.view',compact('customers'));
    }
}
