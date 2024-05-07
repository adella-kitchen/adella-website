<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function addKaryawan(Request $request)
    {
        $karyawan = User::create([
            'name' => $request->name,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'password' => $request->password,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'role' => 'admin'
        ]);
        return redirect('/admin/karyawan');
    }

    public function editKaryawan($id)
    {   
        $datakaryawan = User::where('role', 'admin')->where('id', $id)->first();
        return response()->json($datakaryawan);
    }

    public function updateKaryawan($id, Request $request)
    {
        $datakaryawan = User::where('role', 'admin')->where('id', $id)->first();
        $datakaryawan->update([
            'name' => $request->name,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
        ]
    );

        Alert::success('Hore!', 'Post Created Successfully');
        return redirect('/admin/karyawan');
    }




    public function deleteData($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect('/admin/karyawan');
    }
}
