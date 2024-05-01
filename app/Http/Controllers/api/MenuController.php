<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){ //get all
        $menu = Menu::all();
        return response()->json(['data' => $menu]);
    }

    public function show($id){ //get by id
        $menu = Menu::findOrFail($id);

        return response()->json($menu);
    }
}
