<?php

namespace App\Http\Livewire\Admin\Coupon;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Coupon;
use App\Models\Hotel;
use App\Models\User;

class Create extends Component
{
    public $code;
    public $description;
    public $no_of_users;
    public $discount_type;
    public $is_global = 0;
    public $start_date;
    public $end_date;
    public $discount;
    public $discount_limit;
    public $hotel_id = [];

    protected $rules = [
        "code" => "required|min:5",
        "description" => "required|min:10",
        "no_of_users" => "required",
        "is_global" => "nullable",
        "start_date" => "required|date",
        "end_date" => "required|date",
        "discount" => "required",
        "discount_type" => "nullable",
        "discount_limit" => "nullable",
        "hotel_id" => "required"
    ];

    public function mount()
    {
        $this->discount_type = 0;
        $this->start_date = Carbon::today()->toDateString();
        $this->end_date = Carbon::today()->addDays(7)->toDateString();
    }

    public function store()
    {
        $data = $this->validate();
        try {
            $coupon = Coupon::create([
                'code' => $data['code'],
                'description' => $data['description'],
                'no_of_users' => $data['no_of_users'],
                'discount' => $data['discount'],
                'discount_type' => $data['discount_type'],
                'discount_limit' => $data['discount_limit'],
                'is_global' => $data['is_global'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
            ]);
            $coupon->hotels()->attach($data['hotel_id']);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return redirect()->route('admin.coupons.index')->with('success', 'Coupon created Successfully !!!');
    }

    public function render()
    {
        $hotels = Hotel::all();
        return view('livewire.admin.coupon.create', compact('hotels'));
    }
}
