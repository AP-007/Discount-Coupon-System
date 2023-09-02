<?php

namespace App\Http\Livewire\Admin\Hotel;

use Livewire\Component;
use App\Models\Province;
use App\Models\District;
use App\Models\Hotel;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Create extends Component
{
    public $name;
    public $description;
    public $email;
    public $phone;
    public $password;
    public $provinces;
    public $selectedProvince;
    public $districts;
    public $municipality;
    public $ward_no;
    public $tole;
    public $pan;
    public $data;

    public $province;
    public $selectedDistrict;

    public $province_id;
    public $district_id;

    public function mount()
    {
        $this->provinces = Province::all();
        $this->districts = collect();
    }

    protected $rules = [
        "name" => "required|min:3",
        "description" => "required|min:10",
        "email" => "required|email",
        "phone" => "required|numeric|min:7",
        "password" => "required|min:5",
        "selectedProvince" => "required",
        "selectedDistrict" => "required",
        "municipality" => "required",
        "ward_no" => "required|min:0|max:32",
        "tole" => "required",
        "pan" => "required|numeric",
    ];

    public function store()
    {
        $this->data = $this->validate();
        try {
            $exception = DB::transaction(function () {
               $hotel = Hotel::create([
                    'name' => $this->data['name'],
                    'description' => $this->data['description'],
                    'email' => $this->data['email'],
                    'province_id' => $this->selectedProvince,
                    'district_id' => $this->selectedDistrict,
                    'municipality' => $this->data['municipality'],
                    'ward_no' => $this->data['ward_no'],
                    'tole' => $this->data['tole'],
                    'pan' => $this->data['pan']
                ]);

                User::create([
                    'name' => $this->data['name'],
                    'email' => $this->data['email'],
                    'phone' => $this->data['phone'],
                    'hotel_id' => $hotel->id,
                    'current_team_id' => 2,
                    'password' => Hash::make($this->data['password']),
                ]);
              

            });
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
       
        return redirect()->route('admin.hotels.index')->with('success','Hotel added Successfully !!!');
    }

    public function render()
    {
        return view('livewire.admin.hotel.create');
    }
    public function updatedSelectedProvince($value)
    {
        $this->districts = District::where('province_id', $this->selectedProvince)->get();
        $this->selectedDistrict = $this->districts->first()->id ?? null;
    }
}
