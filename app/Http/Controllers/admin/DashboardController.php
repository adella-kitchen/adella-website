<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index(){
        $total_pendapatan = Order::all()->sum('order_total');
        $jumlah_pesanan = Order::count();
        $total_menu = Menu::count();
        $total_karyawan = User::where('role', 'admin')->count();
        $pesanan_terbaru = Order::join('users', 'order.id_users', '=', 'users.id')
                                ->join('order_detail', 'order.id_order', '=', 'order_detail.id_order')
                                ->join('menu', 'order_detail.id_menu', '=', 'menu.id_menu')
                                ->get();

        $daftar_karyawan = User::where('role', 'admin')->get();

        return view('admin.pages.dashboard',[
            'total_pendapatan' => $total_pendapatan,
            'jumlah_pesanan' => $jumlah_pesanan,
            'total_menu' => $total_menu,
            'total_karyawan' => $total_karyawan,
            'pesanan_terbaru' => $pesanan_terbaru,
            'daftar_karyawan' => $daftar_karyawan
        ]);
    }

    public function apiTesting($id){
        $cart = Address::with('user')->where('id_address', $id)->get();
        return response()->json($cart);

        // $cart = Cart::with('detailCart.detailVariant.variant.menuCart')->where('id_users', $id)->get();
        // return response()->json($cart);
    }
}