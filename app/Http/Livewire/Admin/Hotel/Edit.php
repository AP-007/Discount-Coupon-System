<?php

namespace App\Http\Livewire\Admin\Hotel;

use App\Models\District;
use App\Models\Hotel;
use App\Models\Province;
use Livewire\Component;

class Edit extends Component
{
    public $name;
    public $description;
    public $email;
    public $provinces;
    public $selectedProvince;
    public $districts=[];
    public $municipality;
    public $ward_no;
    public $tole;
    public $pan;

    public $hotel;

    public $province;
    public $selectedDistrict;

    public $province_id;
    public $district_id;

    public function mount(Hotel $hotel)
    {
        $this->provinces = Province::all();
        $this->districts = District::where('province_id', $hotel->province_id)->get();

        $this->name = $hotel->name;
        $this->description = $hotel->description;
        $this->email = $hotel->email;
        $this->selectedDistrict = $hotel->district_id;
        $this->selectedProvince = $hotel->province_id;
        $this->municipality = $hotel->municipality;
        $this->ward_no = $hotel->ward_no;
        $this->tole = $hotel->tole;
        $this->pan = $hotel->pan;
    }

    protected $rules = [
        "name" => "required|min:3",
        "description" => "required|min:10",
        "email" => "required|email",
        "selectedProvince" => "required",
        "selectedDistrict" => "required",
        "municipality" => "required",
        "ward_no" => "required|min:0|max:32",
        "tole" => "required",
        "pan" => "required|numeric",
    ];

    public function update(){

        $data= $this->validate();

        $this->hotel->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'email' => $data['email'],
            'province_id' => $this->selectedProvince,
            'district_id' => $this->selectedDistrict,
            'municipality' => $data['municipality'],
            'ward_no' => $data['ward_no'],
            'tole' => $data['tole'],
            'pan' => $data['pan']
        ]);

        return redirect()->route('admin.hotels.index')->with('success', 'Coupon edited Successfully !!!');
    }

    public function render()
    {
        return view('livewire.admin.hotel.edit');
    }

    public function updatedSelectedProvince($value)
    {
        $this->districts = District::where('province_id', $this->selectedProvince)->get();
        $this->selectedDistrict = $this->districts->first()->id ?? null;
    }
    
}
