<?php

namespace App\Http\Controllers;

use App\Models\Mahasiwa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return response()->json([
            "status" => true,
            "message" => "sukses mengambil data mahasiswa",
            "data" => []
        ], 200);
    }

    public function create(Request $request)
    {
        $action = Mahasiwa::create([
            'nama' => $request->Nama,
            'no_telepon' => $request->No_Telepon,
            'alamat' => $request->Alamat,
            'gender' => $request->Gender,
        ]);

        return response()->json([
            "status" => true,
            "message" => "sukses membuat data mahasiswa",
            "data" => $action
        ], 200);
    }
}
