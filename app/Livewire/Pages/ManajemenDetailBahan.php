<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ManajemenDetailBahan extends Component
{
    public $title = 'Manajemen Detail Bahan';
    public function render()
    {
        return view('livewire.pages.manajemen-detail-bahan')->layout('components.layouts.app', ['title' => $this->title]);;
    }
}