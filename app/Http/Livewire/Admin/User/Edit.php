<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Hotel;
use Livewire\Component;
use App\Models\User;

class Edit extends Component
{
    public $name;
    public $phone;
    public $email;
    public $hotel_id;

    public $user;

    public function mount(User $user)
    {
        $this->name = $user->name;
        $this->phone = $user->phone;
        $this->email = $user->email;

        $this->hotel_id = $user->hotel_id;
    }

    protected $rules = [
        "name" => "required|min:3",
        "phone" => "required|min:7",
        "email" => "required|email",
        "hotel_id" => "required",
    ];

    public function update(){
        $data= $this->validate();
        $this->user->update([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'hotel_id' => $data['hotel_id']
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User edited Successfully !!!');
    }

    public function render()
    {
        $hotels=Hotel::all();
        return view('livewire.admin.user.edit',compact('hotels'));
    }
}
