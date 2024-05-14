<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){
        $daftar_karyawan = User::where('role', 'admin')->get();
        return view('admin.pages.karyawan',[
            'daftar_karyawan' => $daftar_karyawan
        ]);
    }
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
        ]);

        session()->flash('success', 'Data berhasil diedit.');
        return redirect('/admin/karyawan');
    }


    public function deleteData($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect('/admin/karyawan')->with('success', 'Data berhasil dihapus');
    }
}