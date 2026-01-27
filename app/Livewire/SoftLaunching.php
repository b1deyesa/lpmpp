<?php

namespace App\Livewire;

use App\Models\Website;
use Livewire\Component;

class SoftLaunching extends Component
{
    public function launch()
    {
        Website::first()->update([
            'active' => true
        ]);

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.soft-launching');
    }
}