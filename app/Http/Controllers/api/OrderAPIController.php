<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderAPIController extends Controller
{
    public function addOrder(Request $request)
    {
        $validate = $request->validate([
            'note' => ['required'],
            'id_users' => ['required'],
            'id_menu' => ['required'],

            'order_qty' => ['required'],
            'id_detail_variant' => ['required', 'array'],
            'id_detail_variant.*' => ['required', 'integer'],
        ]);

        try {
            $order = Order::create([
                'id_users' => $validate['id_users'],
                'order_number' => 'ORD' . random_int(111111, 999999),
                'order_date' => now(),
                'order_status' => 'unconfirm',
                'order_total' => 0,
                'note' => $validate['note'],
            ]);

            if ($order) {
                // $order->order_total += $validate['qty_menu'] * $validate['id_menu'];
                // $order->save();
                foreach($validate['id_detail_variant'] as $detail_variant){
                    OrderDetail::create([
                        'id_order' => $order->id_order,
                        'id_menu' => $validate['id_menu'],
                        'order_qty' => $validate['order_qty'],
                        'id_detail_variant' => $detail_variant,
                    ]);
                }
                // OrderDetail::create([
                //     'id_order' => $order->id_order,
                //     'id_menu' => $validate['id_menu'],
                //     'order_qty' => 1,
                //     'id_detail_variant' => $validate['id_detail_variant'],
                // ]);
            }
            return response()->json("sukses tambahkan order");
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Menu tidak ditemukan'], 404);
        }
    }
}
