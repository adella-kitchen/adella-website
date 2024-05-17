<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContentPromo;
use Illuminate\Http\Request;

class ManajemenKontenController extends Controller
{
    public function index(){
        $daftar_promo = ContentPromo::all();
        return view('admin.pages.manajemen-konten',[
            'daftar_promo' =>  $daftar_promo
        ]);
    }

    public function addPromo(Request $request)
    {
        $promo = ContentPromo::create([
            '$judul_promo' => $request->judul_promo,
            '$deskripsi_promo' => $request->deskripsi_promo

        ]);
        if ($promo) {
            return redirect('/admin/manajemen-konten');
        } else {
            dd('gagal di tambahkan');
        }
    }
}