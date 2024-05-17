<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index(){
        $order_confirmed = Order::where('order_status', 'confirmed')->get();
        $order_unconfirm = Order::where('order_status', 'unconfirm')->get();
        return view('admin.pages.pesanan', [
            'daftar_order_confirmed' => $order_confirmed,
            'daftar_order_unconfirm' => $order_unconfirm,
        ]);
    }
}