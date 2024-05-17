<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManajemenMenuController extends Controller
{
    public $variant_option = null;
    public function index(){
        $daftar_menu = Menu::all();
        return view('admin.pages.manajemen-menu',[
            'title' => 'Menu',
            'daftar_menu' => $daftar_menu,
            'variant_option' => $this->variant_option,
        ]);
    }
    
    public function detailMenu($id){
        $daftar_menu = DB::table('menu')
            ->join('variant', 'menu.id_menu', '=', 'variant.id_menu')
            ->select('menu.*', 'variant.*')
            ->where('menu.id_menu', $id)
            ->get();
        return view('admin.pages.manajemen-menu-detail', [
            'daftar_menu' => $daftar_menu,
            'variant_option' => $this->variant_option,
        ]);
    }

    public function variantOptionShow($id,$id_variant){
        $daftar_menu = DB::table('menu')
            ->join('variant', 'menu.id_menu', '=', 'variant.id_menu')
            ->select('menu.*', 'variant.*')
            ->where('menu.id_menu', $id)
            ->get();
            
        $this->variant_option = DB::table('variant')
            ->join('detail_variant', 'variant.id_variant', '=', 'detail_variant.id_variant')
            ->select('variant.*', 'detail_variant.*')
            ->where('variant.id_variant', $id_variant)
            ->get();
        return view('admin.pages.manajemen-menu-detail', [
            'variant_option' => $this->variant_option,
            'daftar_menu' => $daftar_menu
        ]);
    }

}