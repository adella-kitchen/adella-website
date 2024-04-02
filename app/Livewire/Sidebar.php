<?php

namespace App\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    public $currentPage = 'dashboard';

    public function changePage($page)
    {
        $this->currentPage = $page;
    }

    public function render()
    {
        return view('livewire.component.sidebar');
    }
}