<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index()
    { //get all
        try {
            $menu = Menu::all();
            return response()->json(['data' => $menu]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Tidak ada menu'], 404);
        }
    }

    public function show($id)
    { //get by id
        try {
            $menu = Menu::with('variants.detailVariants')->findOrFail($id);
            return response()->json($menu);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Menu tidak ditemukan'], 404);
        }
    }
}
