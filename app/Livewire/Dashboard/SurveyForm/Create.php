<?php

namespace App\Livewire\Dashboard\SurveyForm;

use App\Models\Field;
use App\Models\Survey;
use Livewire\Component;
use App\Models\SurveyForm;

class Create extends Component
{
    public Survey $survey;
    public $field_types;
    public $items;
    public $title;
    
    public function mount()
    {
        $this->field_types = Field::all()->pluck('display_name')->toJson();
        $this->items = [
            0 => [
                'label' => null,
                'field_type' => 1,
                'is_required' => false
            ]
        ];
    }
    
    public function updatedItems($index, $value)
    {
        // dd($index, $value);
    }
    
    public function add()
    {
        $this->items[] = [
            'label' => null,
            'field_type' => 1,
            'is_required' => false
        ];
    }
    
    public function remove($index)
    {
        unset($this->item[$index]);
    }
    
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'items.*.label' => 'required'
        ]);
        
        
        
        SurveyForm::create([
            
        ]);
    }
    
    public function render()
    {
        return view('livewire.dashboard.survey-form.create', [
            'survey' => $this->survey
        ]);
    }
}
