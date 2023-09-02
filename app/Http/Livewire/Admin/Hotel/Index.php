<?php

namespace App\Http\Livewire\Admin\Hotel;

use App\Models\District;
use App\Models\Hotel;
use App\Models\Province;
use Livewire\Component;

class Index extends Component
{
    public $confirmDeletion =null;
    protected $listeners =['deleteConfirmed'=>'deleteHotel'];

    public function deleteConfirm($id)
    {
        $this->confirmDeletion=$id;

        $this->dispatchBrowserEvent('delete-confirmation');

    }

    public function deleteHotel(){
        $deleteHotel = Hotel::findOrFail($this->confirmDeletion);
        $deleteHotel->delete();
        return redirect()->route('admin.hotels.index')->with('success','Hotel deleted Successfully !!!');
    }

    public function render()
    {
        $hotels=Hotel::with('district','coupons')->get();
        return view('livewire.admin.hotel.index',compact('hotels'));
    }

   
}
