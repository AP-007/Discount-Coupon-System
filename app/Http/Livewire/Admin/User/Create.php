<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Hotel;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Create extends Component
{
    public $name;
    public $email;
    public $password;
    public $phone;
    public $hotel_id;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'required|min:8',
        'phone' => 'required|min:7',
        'hotel_id' => 'required',
    ];

    public function store()
    {
        $data = $this->validate();
        try {
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'hotel_id' => $data['hotel_id'],
                'current_team_id' => 2,
                'password' => Hash::make($data['password']),
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return redirect()->route('admin.users.index')->with('success', 'Users added Successfully !!!');
    }

    public function render()
    {
        $hotels = Hotel::all();
        return view('livewire.admin.user.create', compact('hotels'));
    }
}
