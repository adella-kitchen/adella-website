<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Pesanan extends Component
{
    public $title = 'Pesanan';
    public function render()
    {
        return view('livewire.pages.pesanan')->layout('components.layouts.app', ['title' => $this->title]);
    }
}