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
        // Validasi data input
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2024',
            'judul_promo' => 'required',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
            'deskripsi_promo' => 'required',
        ]);

        // Cek apakah validasi gagal (tidak diperlukan, karena validasi sudah dijalankan sebelumnya)

        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image-promo', 'public');
        }

        // Buat entri baru dalam database
        ContentPromo::create([
            'image' => $imagePath,
            'judul_promo' => $validatedData['judul_promo'],
            'tgl_mulai' => $validatedData['tgl_mulai'],
            'tgl_selesai' => $validatedData['tgl_selesai'],
            'deskripsi_promo' => $validatedData['deskripsi_promo'],
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('promo.index')->with('success', 'Promo berhasil ditambahkan!');
    }

    public function removeExpiredPromo(){
        ContentPromo ::where('tgl_selesai','<',Carbon::now())->delete();
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
    public function destroy($id)
    {
        $hapus_promo = ContentPromo::findOrFail($id);
        $hapus_promo->delete();
        return redirect()->route('promo.index');
    }
}
