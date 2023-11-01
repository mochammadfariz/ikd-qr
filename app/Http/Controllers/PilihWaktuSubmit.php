<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\TransactionHistory;
use App\Models\Cabang;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

use App\Statics\User\Status;



class PilihWaktuSubmit extends Controller
{
    public function store(Request $request)
    {   
        try {
            // dd($request->all()); 
        
            
            $randomCode = strtoupper(Str::random(6));
            $isCodeExist = Transaction::where('reference_code', $randomCode)->exists();
            
            // Loop untuk menghasilkan random code baru jika sudah ada yang sama di tabel
            while ($isCodeExist) {
                $randomCode = strtoupper(Str::random(6));
                $isCodeExist = Transaction::where('reference_code', $randomCode)->exists();
            }

            // Ambil data dari query parameters
            $id_cabangx = intval(dekripSHA256($request->query('id_cabang')));
            $id_layananx = intval(dekripSHA256($request->query('id_layanan')));
            $id_jabatanx = intval(dekripSHA256($request->query('id')));
            
            $cabang = Cabang::find($id_cabangx);
           
            $stringNom = $request->nominal ?? '0';
            $postStringNom = str_replace(['Rp', '.'], '', $stringNom);
            $jamLayanan = $request->pilihwaktu;
            $tanggalLayanan = $request->pilihtanggal;
            // Simpan data ke dalam database menggunakan model
            $data = new Transaction();
            $dataHistory = new TransactionHistory();
            $data->id_jabatan = $id_jabatanx;
            $data->id_cabang = $id_cabangx;
            $data->id_layanan = $id_layananx;
            $data->user_name = $request->namalengkap;
            $data->nominal = $postStringNom;
            $data->email = $request->email;
            $data->user_phone = $request->nohp;
            $data->tanggal_reservasi = $request->pilihtanggal;
            $data->jam_reservasi = $request->pilihwaktu;
            $data->reference_code = $randomCode;
            $data->id_status = Status::$RESERVED;
            $data->id_vendor = $cabang->id_vendor;

             // Store the $randomCode value in the session
             session(['random_code' => $randomCode]);
             session(['id_cabang' => $id_cabangx]);
             session(['id_layanan' => $id_layananx]);
             session(['jamlayanan' => $jamLayanan]);
             session(['tanggalLayanan' => $tanggalLayanan]);

            $data->save();

            $dataHistory->transaction_status_id = 1;
            $dataHistory->transaction_id = $data->id;
            $dataHistory->updated_by = '';
            $dataHistory->save();
    
            // Jika sukses, tampilkan SweetAlert sukses
            return redirect()->route('koderef')->with('success', 'Reservasi Online Berhasil!');
        } catch (\Exception $e) {
            // Jika gagal, tampilkan SweetAlert gagal
            return redirect()->route('koderef')->with('error', 'Terjadi kesalahan!');
        } 
    }
}
