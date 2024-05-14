<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Promo;

class ManajemenKontenpromo extends Component
{

    public $title = 'Manajemen Konten Promo';
    public function render()
    {
        $daftar_promo = Promo::all();
        return view('livewire.pages.manajemen-kontenpromo', ['daftar_promo' => $daftar_promo])->layout('components.layouts.app', ['title' => $this->title]);
    }
}
