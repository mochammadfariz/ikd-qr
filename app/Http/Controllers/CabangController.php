<?php

namespace App\Http\Controllers;
use App\Models\Cabang;
use App\Models\CabangAntrian;
use App\Models\ViewCabang;
use App\Models\CabangViewLokal;


use App\Models\Master\UnitKerja;
use App\Models\Master\Provinsi;
use App\Models\Master\KabupatenKota;
use App\Models\Master\Kecamatan;
use App\Models\Master\Kelurahan;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class CabangController extends Controller
{
    public function indexCS(){
        DB::enableQueryLog();
        $search = request()->query('search');
        if($search){
            // dd(request()->query('search'));
            $location = ViewCabang::where('nama_cabang','ILIKE',"%{$search}%")
            ->orWhere('alamat', 'ILIKE', '%'.$search.'%')
            ->orWhere('kelurahan', 'ILIKE', '%'.$search.'%')
            ->orWhere('kecamatan', 'ILIKE', '%'.$search.'%')
            ->orWhere('kab_kota', 'ILIKE', '%'.$search.'%')
            ->orWhere('provinsi', 'ILIKE', '%'.$search.'%')
            ->get();
            // dd($location);
            dd(DB::getQueryLog());
            $queueRem = CabangAntrian::all();
            return view('menu.pilihcabangCS',compact(['location','queueRem']));
                }
            $location = Cabang::all();
            $unitKerja = UnitKerja::all();
            $queueRem = CabangAntrian::all();
            dd($queueRem);
            return view('menu.pilihcabangCS',compact(['location','queueRem','unitKerja']));
}

    public function pilihCabang(Request $request){
        // var_dump(dekripSHA256($request->query('id')));
        $search = request()->query('search');
        $id_jabata_enc = $request->query('id');
        $id_jabatan = intval(dekripSHA256($request->query('id'))); 
        // dd($id_jabata_enc);
        // dd($id_jabatan);
        if($search){
            $viewCabang = ViewCabang::where(function($query) use ($search) {
                $query->where('nama_unit_kerja', 'ILIKE', "%{$search}%")
                    ->orWhere('alamat', 'ILIKE', '%' . $search . '%')
                    ->orWhere('kelurahan', 'ILIKE', '%' . $search . '%')
                    ->orWhere('kecamatan', 'ILIKE', '%' . $search . '%')
                    ->orWhere('kab_kota', 'ILIKE', '%' . $search . '%')
                    ->orWhere('provinsi', 'ILIKE', '%' . $search . '%');
            })
            ->where('id_jabatan', $id_jabatan)
            ->get();
    return view('menu.pilihcabang',compact(['viewCabang', 'id_jabata_enc']));
        }
     
        $viewCabang = ViewCabang::where('id_jabatan',$id_jabatan)->get();
    return view('menu.pilihcabang',compact(['viewCabang','id_jabata_enc']));
    }

    public function getLocationCS(){
     $location = Cabang::all();
     return $location;
    }

    public function getLocation(Request $request){
    //  $location = Cabang::with('unitKerja')->get();
    $id_jabatan = intval(dekripSHA256($request->query('id'))); 
    // dd($id_jabatan);
    $location = ViewCabang::where('id_jabatan', $id_jabatan)->get();
    return $location;
    }

    public function getLocationQuery(){
        $search = request()->query('search');
        if($search){
            $locationQ = Cabang::where('nama_cabang','ILIKE',"%{$search}%")->get();
            dd($locationQ);
            return $locationQ;
        }
       }
}
