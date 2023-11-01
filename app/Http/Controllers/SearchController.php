<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabang;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query');

        $cabang = Cabang::where('nama_cabang', 'like', '%'.$query.'%')
                     ->orWhere('alamat', 'like', '%'.$query.'%')
                     ->orWhere('kelurahan', 'like', '%'.$query.'%')
                     ->orWhere('kecamatan', 'like', '%'.$query.'%')
                     ->orWhere('kab_kota', 'like', '%'.$query.'%')
                     ->orWhere('provinsi', 'like', '%'.$query.'%')
                     ->get();

        return response()->json($cabang);
    }
}
