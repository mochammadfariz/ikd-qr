<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\MasterWaktuLayanan;
use App\Models\Master\Jam;
// use App\Models\Waktu;

class PrePilihWaktuSubmitController extends Controller
{
    public function index(Request $request)
    {
        $id_jabatan = dekripSHA256($request->query('id'));
        $id_layanan = dekripSHA256($request->query('id_layanan'));
        $jenLayanan = Layanan::find($id_layanan);
        // $kodeLayanan = Layanan::all(); 
        $jamLayanan = MasterWaktuLayanan::find($id_jabatan);
        // dd($jamLayanan);
        $biayaAdmin = 'Rp100.000';
        return view('menu.pilihwaktu', compact('id_layanan','jenLayanan','biayaAdmin','jamLayanan'));
    }
}
