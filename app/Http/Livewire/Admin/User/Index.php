<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;


class Index extends Component
{
    
    public $confirmDeletion =null;
    protected $listeners =['deleteConfirmed'=>'deleteUser'];

    public function deleteConfirm($id)
    {
        $this->confirmDeletion=$id;

        $this->dispatchBrowserEvent('delete-confirmation');

    }

    public function deleteUser(){
        $deleteUser = User::findOrFail($this->confirmDeletion);
        $deleteUser->delete();
        return redirect()->route('admin.users.index')->with('success','User deleted Successfully !!!');
    }

    public function render()
    {
        $users = User::where('role','0')->get();
        return view('livewire.admin.user.index',compact('users'));
    }
}
