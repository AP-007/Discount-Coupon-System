<?php

namespace App\Http\Livewire\User\Customer;

use App\Models\Coupon;
use App\Models\Customer;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;
    public $phone;
    public $coupon_id;

    protected $rules = [
        'name' => 'required',
        'email' => 'nullable|email',
        'phone' => 'required|min:7',
    ];

    public function mount($id) {
        $this->coupon_id = $id;
    }

    public function store()
    {
        $data = $this->validate();
        try {
            $customers = Customer::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'coupon_id' => $this->coupon_id
            ]);
            
        } catch (\Exception $e) {   
            dd($e->getMessage());
        }
        Coupon::find($this->coupon_id)->decrement('no_of_users');
        return redirect()->route('user.coupon')->with('success','Customer added Successfully !!!');
    }

    public function render()
    {  
        return view('livewire.user.customer.create');
    }
}
