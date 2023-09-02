<?php

namespace App\Http\Livewire\Admin\Coupon;

use App\Models\Coupon;
use Livewire\Component;

class Index extends Component
{
    public $confirmDeletion =null;

    protected $listeners =['deleteConfirmed'=>'deleteCoupon'];

    public function deleteConfirm($id)
    {
        $this->confirmDeletion=$id;
        $this->dispatchBrowserEvent('delete-confirmation');
    }

    public function deleteCoupon(){
        $deleteCoupon = Coupon::findOrFail($this->confirmDeletion);
        $deleteCoupon->delete();
        return redirect()->route('admin.coupons.index')->with('success','Coupon deleted Successfully !!!');
    }

    public function render()
    {
        $coupons= Coupon::all();
        return view('livewire.admin.coupon.index',compact('coupons'));
    }
}
