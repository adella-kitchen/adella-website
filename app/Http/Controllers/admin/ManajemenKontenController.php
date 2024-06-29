<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContentPromo;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class ManajemenKontenController extends Controller
{
    public function index()
    {

        $data_promo = ContentPromo::all();
        return view('admin.pages.manajemen-konten', compact('data_promo'));
        // return redirect()->route('promo.index', compact('data_promo'));
    }

    public function create()
    {
        return view('admin.pages.manajemen-konten');
    }

    public function addPromo(Request $request)
    {
        $file = $request->file('promo_img');
        $imageName = time() . '.' . $file->extension();
        $file->move(public_path('img/manajemen_konten'), $imageName);

        $mulai_promo = $request->mulai_promo ? date('Y-m-d', strtotime($request->mulai_promo)) : null;
        $selesai_promo = $request->selesai_promo ? date('Y-m-d', strtotime($request->selesai_promo)) : null;

        $promo = ContentPromo::create([
            'judul_promo' => $request->judul_promo,
            'deskripsi_promo' => $request->deskripsi_promo,
            'gambar_konten' => $imageName,
            'mulai_promo' => $mulai_promo,
            'selesai_promo' => $selesai_promo,
        ]);
        if ($promo) {
            return redirect('/admin/manajemen-konten');
        } else {
            dd('gagal di tambahkan');
        }
    }

    public function deleteKonten($id){
        $delete = ContentPromo::where('id_promo', $id)->delete();
        if ($delete) {
            return redirect('/admin/manajemen-konten');
        } else {
            dd('gagal di hapus');
        }
    }

    public function updateKonten(Request $request, $id){
        $update = ContentPromo::where('id_promo', $id)->first();
        $update->update([
            'judul_promo' => $request->judul_promo_card,
            'deskripsi_promo' => $request->deskripsi_promo_card,
            'mulai_promo' => $request->mulai_promo_card ? date('Y-m-d', strtotime($request->mulai_promo_card)) : null,
            'selesai_promo' => $request->selesai_promo_card ? date('Y-m-d', strtotime($request->selesai_promo_card)) : null,
        ]);
        return redirect('/admin/manajemen-konten');
    }
}
