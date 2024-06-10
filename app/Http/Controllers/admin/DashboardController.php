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

    public function apiTesting($id){
        // $cart = Menu::with('carts')->get();
        // return response()->json($cart);

        $cart = Cart::with('detailCart.detailVariant.variant.menuCart')->where('id_users', $id)->get();
        return response()->json($cart);
    }
}