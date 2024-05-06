<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class Karyawan extends Component
{
    public $title = 'Karyawan';
    public function render()
    {
        $karyawan = User::where('role','admin')->get();
        return view('livewire.pages.karyawan',['daftar_karyawan'=>$karyawan])->layout('components.layouts.app', ['title' => $this->title]);
    }
}