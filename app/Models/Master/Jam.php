<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jam extends Model
{
    use HasFactory;

    protected $table = 'tbl_master_jam';

    protected $guarded = ['id'];

    function scopeAktif($query)
    {
        return $query->where('status_data', 1);
    }
}
