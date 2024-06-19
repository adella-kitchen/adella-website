<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{

    public function index(Request $request)
    {
        try {
            $limit = $request->query('limit');

            $query = Menu::query();

            if ($limit) {
                $query->limit($limit);
            }

            $menus = $query->inRandomOrder()->get();

            return response()->json(['data' => $menus]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal memuat data menu'], 500);
        }
    }



    public function show($id)
    { //get by id
        try {
            $menu = Menu::with('variants.detailVariants')->findOrFail($id);
            return response()->json(['data' => $menu]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Menu tidak ditemukan'], 404);
        }
    }

    public function getCategory($category)
    {
        try {
            $menu = Menu::where('menu_category', $category)->get();

            if ($menu->isEmpty()) {
                return response()->json(['message' => 'Tidak ada menu dalam kategori ini'], 404);
            }
            return response()->json(['data' => $menu]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal memuat data menu'], 500);
        }
    }
}
