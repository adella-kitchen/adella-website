<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ManajemenKontenpromo extends Component
{
    public $title = 'Manajemen Konten Promo';
    public function render()
    {
        return view('livewire.pages.manajemen-kontenpromo')->layout('components.layouts.app', ['title' => $this->title]);
    }
}