<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Master\Provinsi;
use App\Models\Master\KabupatenKota;
use App\Models\Master\Kecamatan;
use App\Models\Master\Kelurahan;
use App\Models\Master\UnitKerja;

class Cabang extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tbl_cabang';

    public $incrementing = false;

    protected $fillable = ['id_vendor', 'nama_vendor', 'latitude', 'longitude', 'name', 'alamat'];

    protected $guard_name = 'web';

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'id_provinsi', 'id');
    }

    public function kabupatenKota()
    {
        return $this->belongsTo(KabupatenKota::class, 'id_kab_kota', 'id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan', 'id');
    }

    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class, 'id_unit_kerja', 'id_unit_kerja');
    }
}
