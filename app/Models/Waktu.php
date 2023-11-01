<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Waktu extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tbl_master_waktu_layanan';

    public $incrementing = false;

    protected $fillable = ['name', 'waktu_mulai', 'waktu_selesai'];

    protected $guard_name = 'web';

    
}