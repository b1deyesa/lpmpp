<?php

namespace App\Livewire\Dashboard\Role;

use App\Models\Role;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public $display_name;
    
    public function store()
    {
        $this->validate([
            'display_name' => 'required'
        ]);
        
        if (Role::where('slug', Str::slug($this->display_name))->exists()) {
            $this->addError('display_name', 'Role name already exists.');
            return;
        }
        
        Role::create([
            'display_name' => $this->display_name,
            'slug' => Str::slug($this->display_name)
        ]);
        
        return redirect()->route('dashboard.role.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.role.create');
    }
}
