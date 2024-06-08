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

    public function updateQtyMenu(Request $request) {
        // Validasi input
        $request->validate([
            'id_cart' => 'required|integer',
            'operation' => 'required|string|in:tambah,kurang',
        ]);

        $userId = $request->user()->id;
        $cartId = $request->input('id_cart');
        $operation = $request->input('operation');

        try {
            // Cari cart berdasarkan id_cart dan id_users
            $cart = Cart::where('id_cart', $cartId)->where('id_users', $userId)->firstOrFail();

            if ($operation === 'tambah') {
                $cart->qty_menu += 1;
            } elseif ($operation === 'kurang' && $cart->qty_menu > 0) {
                $cart->qty_menu -= 1;
            }

            $cart->save();

            return response()->json($cart);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Menu tidak ditemukan atau Anda tidak memiliki izin untuk mengubah item ini'], 404);
        }
    }

    public function deleteMenuCart(Request $request, $id) {
        $userId = $request->user()->id;

        try {
            $cart = Cart::where('id_cart', $id)->where('id_users', $userId)->firstOrFail();
            $detail_cart = DetailCart::where('id_cart', $cart->id_cart)->get();
            foreach ($detail_cart as $detail) {
                $detail->delete();
            }
            $cart->delete();
            return response()->json(['message' => 'Sukses menghapus produk']);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Menu tidak ditemukan atau Anda tidak memiliki izin untuk menghapus item ini'], 404);
        }
    }
}
