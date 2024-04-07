<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ManajemenMenu extends Component
{
    public $title = 'Manajemen Menu';
    public function render()
    {
        return view('livewire.pages.manajemen-menu')->layout('components.layouts.app', ['title' => $this->title]);
    }
}