<?php

namespace App\Livewire\Dashboard\Survey;

use App\Models\Survey;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public $title;
    
    public function store()
    {
        $this->validate([
            'title' => 'required'
        ]);
        
        if (Survey::where('slug', Str::slug($this->title))->exists()) {
            $this->addError('title', 'Menu survey already exists.');
            return;
        }
        
        Survey::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title)
        ]);
        
        return redirect()->route('dashboard.survey.index')->with('success', 'Successfully added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.survey.create');
    }
}
