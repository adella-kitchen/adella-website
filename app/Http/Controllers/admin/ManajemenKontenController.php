<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContentPromo;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $ValidateData = $request->validate([
            'judul_promo' => 'required',
            'deskripsi_promo' => 'required',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
            'gambar_promo' => 'image|file|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if ($request->file('gambar_promo')) {
            $ValidateData['gambar_promo'] = $request->file('gambar_promo')->store('images', 'public');
        }



        ContentPromo::create([
            'judul_promo' => $ValidateData['judul_promo'],
            'deskripsi_promo' => $ValidateData['deskripsi_promo'],
            'gambar_promo' => $ValidateData['gambar_promo'] ?? null,
            'tgl_mulai' => $ValidateData['tgl_mulai'],
            'tgl_selesai' => $ValidateData['tgl_selesai'],
        ]);
        return redirect()->route('promo.index');
    }

    public function show(ContentPromo $promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContentPromo $promo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContentPromo $promo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContentPromo $promo)
    {
        $hapus_promo = ContentPromo::findOrFail($id_promo);
        $hapus_promo->delete();
        return redirect()->route('promo.index');
    }
}
