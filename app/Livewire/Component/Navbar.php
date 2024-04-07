<?php

namespace App\Livewire\Component;

use Livewire\Component;

class Navbar extends Component
{
    public $title;

    public function mount($title)
    {
        $this->title = $title;
    }
    
    public function render()
    {
        return view('livewire.component.navbar');
    }
}