<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $kategori = $request->input('kategori');
    $kategoriValid = ['kategori1', 'kategori2', 'kategori3']; // Ganti dengan data kategori sebenarnya.

    if ($kategori && !in_array($kategori, $kategoriValid)) {
        return view('nama_view', [
            'error' => '*Kategori tidak tersedia',
            'kategori' => $kategori
        ]);
    }

    // Jika kategori valid atau kosong, kembalikan view tanpa error
    return view('nama_view', [
        'kategori' => $kategori,
        'error' => null
    ]);
}

}
