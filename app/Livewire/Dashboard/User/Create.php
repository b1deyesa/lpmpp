<?php

namespace App\Livewire\Dashboard\User;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $roles;
    public $role;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    
    public function mount()
    {
        $this->roles = Role::all()->pluck('display_name', 'id')->toJson();
    }
    
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
            'password' => 'required|confirmed'
        ]);
        
        User::create([
            'role_id' => $this->role,
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);
        
        return redirect()->route('dashboard.user.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.user.create');
    }
}
