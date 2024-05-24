<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ContentPromo;
use Illuminate\Http\Request;

class ContentPromoController extends Controller
{
    public function getPromo()
    {
        try {
            $promo = ContentPromo::all();
            return response()->json(['data' => $promo]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Tidak ada promo'], 404);
        }
    }
}
