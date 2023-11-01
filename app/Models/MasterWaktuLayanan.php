<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterWaktuLayanan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tbl_master_waktu_layanan';
}
