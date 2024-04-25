<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ManajemenBahan extends Component
{
    public $title = 'Manajemen Bahan';
    public function render()
    {
        return view('livewire.pages.manajemen-bahan')->layout('components.layouts.app', ['title' => $this->title]);
    }
}