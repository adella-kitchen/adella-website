<?php

namespace App\Http\Controllers\api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->with('address')->first();

        if (!$user) {
            return response()->json([
                'message' => 'Email tidak ditemukan',
            ], 404);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Email atau password salah',
            ], 401);
        }

        $token = $user->createToken('user login')->plainTextToken;

        return response()->json([
            'message' => 'Login Berhasil',
            'token' => $token,
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'address' => [
                    'id_alamat' => $user->alamat->id ?? null,
                ]
            ]
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Berhsil Logout'], 200);
    }

    public function getUser($id)
    {
        try {
            $user = User::with('address')->where('id', $id)->first();
            return response()->json(['data' => $user]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'User tidak ditemukan'], 404);
        }
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => Carbon::now(),
            'role' => 'customer',
        ]);

        return response()->json(['message' => 'User registered successfully']);
    }

    public function checkUserData(Request $request)
    {
        $user = $request->user();

        $fieldsToCheck = [
            'no_telp',
            'jenis_kelamin',
            'tanggal_lahir',
            'tempat_lahir',
            'address'
        ];

        foreach ($fieldsToCheck as $field) {
            if (is_null($user->$field)) {
                return response()->json([
                    'message' => 'Data tidak lengkap',
                    'data' => $user
                ]);
            }
        }

        return response()->json([
            'message' => 'Data lengkap',
            'data' => $user
        ]);
    }
}
