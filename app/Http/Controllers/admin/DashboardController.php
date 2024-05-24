<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.pages.dashboard');
    }

    publIc function apiTesting(){
        // $cart = Menu::with('carts')->get();
        // return response()->json($cart);

        $cart = Cart::with('menu.variants')->get();
        return response()->json($cart);
    }
}