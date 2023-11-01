<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabangHasJabatan extends Model
{
    use HasFactory;
    protected $table = 'tbl_cabang_has_jabatans';
    protected $guarded = ['id'];
}
