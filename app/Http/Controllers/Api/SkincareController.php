<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Skincare;
use App\Http\Resources\SkincareResource;
use Illuminate\Http\Request;

class SkincareController extends Controller
{
    public function index()
    {
        $skincares = Skincare::all();
        return new SkincareResource('Daftar produk skincare berhasil diambil', $skincares);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'brand'       => 'required|string|max:255',
            'kategori'    => 'required|string|max:255',
            'harga'       => 'required|integer',
            'ukuran_ml'   => 'required|integer',
            'tipe_kulit'  => 'required|string|max:255',
            'status'      => 'required|in:ready,out_of_stock',
            'foto'        => 'required|url',
        ]);

        $skincare = Skincare::create($validatedData);

        return (new SkincareResource('Data produk skincare berhasil ditambahkan', $skincare))
            ->response()
            ->setStatusCode(201);
    }

    public function show($id)
    {
        $skincare = Skincare::find($id);

        if (!$skincare) {
            return response()->json([
                'message' => 'Data produk skincare tidak ditemukan'
            ], 404);
        }

        return new SkincareResource('Detail produk skincare berhasil diambil', $skincare);
    }

    public function update(Request $request, $id)
    {
        $skincare = Skincare::find($id);

        if (!$skincare) {
            return response()->json([
                'message' => 'Data produk skincare tidak ditemukan'
            ], 404);
        }

        $validatedData = $request->validate([
            'nama_produk' => 'sometimes|required|string|max:255',
            'brand'       => 'sometimes|required|string|max:255',
            'kategori'    => 'sometimes|required|string|max:255',
            'harga'       => 'sometimes|required|integer',
            'ukuran_ml'   => 'sometimes|required|integer',
            'tipe_kulit'  => 'sometimes|required|string|max:255',
            'status'      => 'sometimes|required|in:ready,out_of_stock',
            'foto'        => 'sometimes|required|url',
        ]);

        $skincare->update($validatedData);

        return new SkincareResource('Data produk skincare berhasil diperbarui', $skincare);
    }

    public function destroy($id)
    {
        $skincare = Skincare::find($id);

        if (!$skincare) {
            return response()->json([
                'message' => 'Data produk skincare tidak ditemukan'
            ], 404);
        }

        $skincare->delete();

        return new SkincareResource('Data produk skincare berhasil dihapus', null);
    }
}