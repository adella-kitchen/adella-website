<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Karyawan extends Component
{
    public $title = 'Karyawan';
    public function render()
    {
        return view('livewire.pages.karyawan')->layout('components.layouts.app', ['title' => $this->title]);
    }
}