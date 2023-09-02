<?php

namespace App\Http\Livewire\Admin\Coupon;

use App\Models\Coupon;
use App\Models\Hotel;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $code;
    public $description;
    public $no_of_users;
    public $discount_type;
    public $is_global;
    public $start_date;
    public $end_date;
    public $discount;
    public $discount_limit;
    public $coupon;
    public $coupons;
    public $hotel_id=[];

    public function mount(Coupon $coupon)
    {
        $this->coupons = $coupon;
        $this->code = $coupon->code;
        $this->description = $coupon->description;
        $this->no_of_users = $coupon->no_of_users;
        $this->discount_type = $coupon->discount_type;
        $this->is_global = $coupon->is_global;
        $this->discount = $coupon->discount;
        $this->discount_limit = $coupon->discount_limit;
        $this->start_date = $coupon->start_date;
        $this->end_date = $coupon->end_date;
        $this->hotel_id = $coupon->hotel_id;
    }


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
        "hotel_id" => "required",
    ];


    public function update()
    {
        $data = $this->validate();

        $this->coupon->update([
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

        $this->coupon->hotels()->sync($data['hotel_id']);


        return redirect()->route('admin.coupons.index')->with('success', 'Coupon edited Successfully !!!');
    }

    public function deleteConfirm($id)
    {
        dd($id);
    }

    public function render()
    {
        $hotels= Hotel::all();
        return view('livewire.admin.coupon.edit',compact('hotels'));
    }
}
