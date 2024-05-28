<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\DetailCart;
use Illuminate\Http\Request;

class CartAPIController extends Controller
{
    public function index($id){
        try {
            $cart = Cart::with('detailCart.detailVariant.variant.menuCart')->where('id_users', $id)->get();
            return response()->json($cart);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Menu tidak ditemukan'], 404);
        }
    }

    public function addCart(Request $request){
        $validatedData = $request->validate([
            'id_users' => ['required'],
            'id_menu' => ['required'],
            'qty_menu' => ['required'],
            'id_detail_variant' => ['required'],
        ]);

        try {
            $cart = Cart::create([
                'id_users' => $validatedData['id_users'],
                'id_menu' => $validatedData['id_menu'],
                'qty_menu' => $validatedData['qty_menu'],
            ]);

            if ($cart) {
                DetailCart::create([
                    'id_cart' => $cart->id_cart,
                    'id_detail_variant' => $validatedData['id_detail_variant'],
                ]);
            }
            return response()->json("sukses tambahkan");
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Menu tidak ditemukan'], 404);
        }
    }
}
