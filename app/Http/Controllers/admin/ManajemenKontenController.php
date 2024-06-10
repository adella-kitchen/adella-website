<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContentPromo;
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

    public function store(Request $request)
    {

        $ValidateData = $request->validate([
            'image' => 'image|file|max:2024',
            'judul_promo' => 'required',
            // 'date_start' => 'required',
            // 'date_end' => 'required',
            'deskripsi_promo' => 'required',

        ]);
        if ($request->file('image')) {
            $ValidateData['image'] = $request->file('image')->store('image-promo', 'public');
        }
        ContentPromo::create([

            'image' => $ValidateData['image'],
            'judul_promo' => $ValidateData['judul_promo'],
            'deskripsi_promo' => $ValidateData['deskripsi_promo'],

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
    public function destroy($id)
    {
        $hapus_promo = ContentPromo::findOrFail($id);
        $hapus_promo->delete();
        return redirect()->route('promo.index');
    }
}
