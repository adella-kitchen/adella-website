<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionAPIController extends Controller
{
    public function addTransaction(Request $request){
        $validate = $request->validate([
            'id_order' => ['required'],
            'transaction_date' => ['required'],
            'payment_method' => ['required'],
            'grand_total' => ['required'],
            'shipping_cost' => ['required'],
            'pay' => ['required'],
        ]);

        try {
            Transaction::create([
                'id_order' => $validate['id_order'],
                'transaction_date' => $validate['transaction_date'],
                'payment_method' => $validate['payment_method'],
                'grand_total' => $validate['grand_total'],
                'shipping_cost' => $validate['shipping_cost'],
                'pay' => $validate['pay'],
            ]);
            return response()->json("sukses tambahkan transaksi");
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Menu tidak ditemukan'], 404);
        }
    }
}