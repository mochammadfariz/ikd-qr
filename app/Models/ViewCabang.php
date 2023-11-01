<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class ViewCabang extends Model
{
    use HasFactory;
    protected $table = 'v_monitoring_antrian';
    protected $primaryKey = null;
    public $incrementing = false;
}
