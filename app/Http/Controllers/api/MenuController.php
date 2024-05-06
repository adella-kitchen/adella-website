<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index(){ 
        $menu = Menu::all();
        return response()->json(['data' => $menu]);
    }

    public function show($id){ 
        $menu = DB::table('menu')->join('variant', 'menu.id_menu', '=', 'variant.id_menu')
        ->join('detail_variant', 'variant.id_variant', '=', 'detail_variant.id_variant')
        ->select('menu.*', 'variant.*', 'detail_variant.*') 
        ->where('menu.id_menu', $id)
        ->get();
            
        $menu_group = $menu->groupBy('id_menu')->map(function ($group) {
            $firstItem = $group->first();
            return [
                'id_menu' => $firstItem->id_menu,
                'menu_name' => $firstItem->menu_name,
                'variants' => $group->groupBy('id_variant')->map(function ($variantGroup) {
                    $firstVariant = $variantGroup->first();
                    return [
                        'id_variant' => $firstVariant->id_variant,
                        'variant_name' => $firstVariant->variant_name,
                        'details' => $variantGroup->map(function ($detail) {
                            return [
                                'id_detail_variant' => $detail->id_detail_variant,
                                'variant_detail' => $detail->variant_detail,
                            ];
                        })->toArray(),
                    ];
                })->values()->toArray(),
            ];
        })->values()->toArray();
        
        return response()->json($menu_group);

        return response()->json($menu_group);
    }
}