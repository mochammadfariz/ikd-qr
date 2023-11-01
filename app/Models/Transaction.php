<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Layanan;
use App\Models\Jabatan;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tbl_transactions';
    // tambahkan guarded id untuk case nominal = null
    protected $guarded = ['id'];

    public function relasiLayanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id');
    }

    public function relasiJabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id');
    }

}
