<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){ return Buku::all();
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',  // Nama buku tidak boleh kosong
            'harga' => 'required|numeric|min:1000',  // Harga minimal Rp 1.000
            'penulis' => 'required',  // Anda mungkin juga ingin memvalidasi penulis
            'stok' => 'required|integer',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        $buku = Buku::create($request->all());
        return response()->json($buku, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
           // Cari buku berdasarkan id
    $buku = Buku::find($id);

    // Jika buku tidak ditemukan, kembalikan error 404
    if (!$buku) {
        return response()->json(['message' => 'Buku tidak ditemukan'], 404);
    }

    // Kembalikan buku yang ditemukan dalam format JSON
    return response()->json($buku);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function search(Request $request)
{
    $query = Buku::query();

    if ($request->has('kategori_id')) {
        $query->where('kategori_id', $request->kategori_id);
    }

    if ($request->has('judul')) {
        $query->where('judul', 'like', '%' . $request->judul . '%');
    }

    $results = $query->get();

    return response()->json($results);
}
public function searchByJudul(Request $request)
{
    // Ambil parameter 'judul' dari query string
    $judul = $request->query('judul');

    // Validasi agar parameter 'judul' tidak kosong
    if (!$judul) {
        return response()->json(['message' => 'Parameter judul tidak boleh kosong'], 400);
    }

    // Query untuk mencari buku berdasarkan judul, menggunakan 'LIKE' untuk pencarian parsial
    $buku = Buku::where('judul', 'like', '%' . $judul . '%')->get();

    // Jika tidak ada buku yang ditemukan, kembalikan pesan 404
    if ($buku->isEmpty()) {
        return response()->json(['message' => 'Buku tidak ditemukan'], 404);
    }

    // Kembalikan hasil pencarian dalam format JSON
    return response()->json($buku);
}
}
