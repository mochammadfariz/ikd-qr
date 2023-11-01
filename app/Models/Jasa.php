<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;

    protected $table = 'tbl_vendor';

    public $incrementing = false;

    protected $fillable = ['kode_vendor', 'nama_vendor'];

    protected $guard_name = 'web';
}