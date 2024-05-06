<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{

    public function addPromo(Request $request)
    {
        $promo = Promo::create([
            '$judul_promo' => $request->judul_promo,
            '$deskripsi_promo' => $request->deskripsi_promo

        ]);
        return redirect()->route('admin/manajemen-konten');
    }
}
