<?php

namespace App\Http\Controllers;
use App\Models\Layanan;
use App\Models\Jabatan;
use App\Models\ViewCabang;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    function menuLayanan(Request $request){
        $search = request()->query('search');
        $id_jabata_enc = $request->query('id');
        $id_jabatan = intval(dekripSHA256($request->query('id'))); 
        $namaLayanan = Jabatan::where('id',$id_jabatan)->first();
        if($search){
            $menuLayanan = Layanan::where(function($query) use ($search) {
                $query->where('nama_layanan', 'ILIKE', "%{$search}%");
            })
            ->where('id_jabatan', $id_jabatan)
            ->get();
    return view('menu.layanan',compact(['menuLayanan', 'id_jabata_enc', 'namaLayanan']));
        }
        $menuLayanan = Layanan::where('id_jabatan',$id_jabatan)->get();
        return view('menu.layanan',compact(['menuLayanan', 'id_jabata_enc','namaLayanan']));
    }

}
