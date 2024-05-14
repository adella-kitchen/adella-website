<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.pages.dashboard');
    }
}