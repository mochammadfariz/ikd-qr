<?php

namespace App\Http\Controllers;
use App\Models\ViewCabang;
use App\Models\Layanan;
use App\Models\Transaction;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

use DateTime;
use DateInterval;



class CodeGeneratorController extends Controller
{
public function kodeRefGen(){

    // Get the $randomCode value from the session
    $randomCode = session('random_code');
    $idcabang = session('id_cabang');
    $idlayanan = session('id_layanan');
    $jamlayanan = session('jamlayanan');
    $tanggalLayanan = session('tanggalLayanan');
    
    // Mengubah $jamlayanan menjadi objek DateTime
    $dateTime = DateTime::createFromFormat('H:i', $jamlayanan);

    if ($dateTime) {
        // Menghitung waktu 15 menit sebelumnya
        $sebelumnya = clone $dateTime;
        $sebelumnya->sub(new DateInterval('PT15M'));

        // Menghitung waktu 15 menit setelahnya
        $sesudah = clone $dateTime;
        $sesudah->add(new DateInterval('PT15M'));

        // Formatkan hasilnya kembali ke dalam format 'H:i'
        $jamSebelumnya = $sebelumnya->format('H:i');
        $jamSesudah = $sesudah->format('H:i');
    } else {
        // Handle jika waktu tidak valid
        dd('Format waktu tidak valid.');
    }

    // Generate QR code from $randomCode
    $qrCode = QrCode::format('png')
        ->size(200)
        ->generate($randomCode);
    // dd($qrCode);
    // Clear the $randomCode value from the session if needed
    // session()->forget('random_code');

    // Retrieve cabang dan service records based on id
    $kdrefcabang = ViewCabang::where('id_cabang',$idcabang)->first();
    $kdreflayanan = Layanan::find($idlayanan);
    $relationTransaction = Transaction::where('reference_code', $randomCode)->get();
    // dd( $kdrefcabang);
      // Check jika cabang dan layanan records exist
      if (!$kdrefcabang|| !$kdreflayanan) {
        return redirect()->back()->with('error', 'cabang atau layanan not found!');
    }

    // Pass the $randomCode to the view or do something else with it
    return view('menu.kodereferensi', compact('qrCode','kdrefcabang','kdreflayanan','randomCode','jamlayanan','jamSebelumnya','jamSesudah','tanggalLayanan','relationTransaction'));
}


public function saveViewAsImage()
{
    // Get the content of the view
    $viewContent = view('menu.kodereferensi', compact('qrCode', 'kdrefcabang', 'kdreflayanan', 'randomCode'))->render();

    // Save the view as an image using Browsershot
    $fileName = 'Kode_Referensi_' . time() . '.png';
    $path = 'screenshots/' . $fileName;

    Browsershot::html($viewContent)
        ->noSandbox() // Required for Linux servers
        ->save(storage_path('app/' . $path));

    return $path;
}

}

