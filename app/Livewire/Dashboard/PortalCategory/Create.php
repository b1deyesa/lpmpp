<?php

namespace App\Livewire\Dashboard\PortalCategory;

use App\Models\Pusat;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Models\PortalCategory as ModelsPortalCategory;

class Create extends Component
{
    public Pusat $pusat;
    public $categories;
    public $title;
    
    public function mount()
    {
        $this->categories = $this->pusat->portalCategories()->pluck('title', 'id')->toJson();
    }
 
    public function submit()
    {
        $this->validate([
            'title' => [
                'required',
                Rule::unique('portal_categories', 'slug')
                    ->where(fn ($q) => $q->where('pusat_id', $this->pusat->id)),
            ],
        ]);
        
        ModelsPortalCategory::create([
            'pusat_id' => $this->pusat->id,
            'title'    => $this->title,
            'slug'     => Str::slug($this->title),
        ]);
        
        return redirect()->route('dashboard.pusat.portal.index', ['pusat' => $this->pusat])->with('success', 'Success added!');
    }
    
    public function render()
    {
        return view('livewire.dashboard.portal-category.create', [
            'pusat' => $this->pusat
        ]);
    }
}
