<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function get()
    {
        return response()->json([
            "asd" => "asd",
        ]);
    }

    public function create(Request $request)
    {
        User::create([
            'nama' => $request->Nama,
            'telepon' => $request->No_Telepon,
            'alamat' => $request->Alamat,
            'gender' => $request->Alamat,
        ]);
    }
}
