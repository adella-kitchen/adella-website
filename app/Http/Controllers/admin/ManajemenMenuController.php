<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DetailVariant;
use App\Models\Menu;
use App\Models\Variant;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ManajemenMenuController extends Controller
{
    public $variant_option = null;
    public $id_menu;

    public function index(){
        // test
        $menu = Menu::with('variants.detailVariants')->get();
        // dd($menu);

        $daftar_menu = Menu::all();
        return view('admin.pages.manajemen-menu',[
            'title' => 'Menu',
            'daftar_menu' => $daftar_menu,
            'variant_option' => $this->variant_option,
        ]);
    }

    public function detailMenu($id){
        //set id_menu
        Session::put('id_menu', $id);

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
        Session::put('id_menu', $id);
        Session::put('id_variant', $id_variant);

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

    public function addMenu(Request $request){
        // $validatedData = $request->validate([
        //     'menu_category' => ['required'],
        //     'menu_name' => ['required'],
        //     'desc_name' => ['required'],
        //     'price_menu' => ['required'],
        // ]);

        if($request){
            Menu::create([
                'menu_category' => $request->menu_category,
                'menu_name' => $request->menu_name,
                'desc_menu' => $request->desc_menu,
                'price_menu' => $request->price_menu,
                'menu_img' => 'image-menu.jpg',
            ]);
            return redirect('/admin/manajemen-menu');
        }else{
            dd("tidak tervalidasi");
        }
    }

    public function addVariant(Request $request){
        if($request){
            Variant::create([
                'variant_name' => $request->variant_name,
                'id_menu' => Session::get('id_menu'),
                'desc_variant' => $request->desc_variant,
            ]);
            return redirect('/admin/manajemen-menu/' . Session::get('id_menu') . '/' . Session::get('id_variant'));
        }else{
            dd("tidak tervalidasi");
        }
    }

    public function addOptionVariant(Request $request){
        if($request){
            DetailVariant::create([
                'id_variant' => Session::get('id_variant'),
                'variant_detail' => $request->variant_detail,
                'additional_price' => $request->additional_price,
            ]);
            return redirect('/admin/manajemen-menu/' . Session::get('id_menu') . '/' . Session::get('id_variant'));
        }else{
            dd("tidak tervalidasi");
        }
    }

}
