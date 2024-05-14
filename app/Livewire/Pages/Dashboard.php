<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class Dashboard extends Component
{
    public $title = 'Dashboard';
    public function render()
    {
        return view('livewire.pages.dashboard')->layout('components.layouts.app', ['title' => $this->title]);
    }
}