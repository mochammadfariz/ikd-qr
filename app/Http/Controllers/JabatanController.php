<?php

namespace App\Http\Controllers;
use App\Models\Jabatan;
use App\Models\Waktu;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    //
    function index(){
        $jabatan = Jabatan::all();
        $waktuLayanan = Waktu::all();
        // dd($jabatan);
        return view('menu.frontliner',compact(['jabatan','waktuLayanan']));
    }
}
