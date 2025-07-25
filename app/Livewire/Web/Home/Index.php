<?php

namespace App\Livewire\Web\Home;

use App\Models\Slider;
use Livewire\Component;
use App\Models\Category; // Make sure to import your Category model

class Index extends Component
{
    public function render()
    {
        return view('livewire.web.home.index', [
            'categories' => Category::all(), // or whatever query you need
            'sliders' => Slider::all() // assuming you also need sliders
        ]);
    }
}
