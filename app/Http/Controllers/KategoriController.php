<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index() { return Kategori::all(); }

    public function store(Request $request) {
        $request->validate(['nama_kategori' => 'required|unique:kategoris']);
        $kategori = Kategori::create($request->all());
        return response()->json($kategori, 201);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                // Find the category by ID
                $kategori = Kategori::findOrFail($id);

                // Validate the incoming request
                $request->validate([
                    'nama_kategori' => 'required|unique:kategoris,nama_kategori,' . $id,
                ]);

                // Update the category
                $kategori->update($request->all());

                // Return the updated category as a JSON response
                return response()->json($kategori, 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
