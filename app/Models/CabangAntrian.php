<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CabangAntrian extends Model
{
    use HasFactory, SoftDeletes;
    protected $table="tbl_cabang_antrian";
}
