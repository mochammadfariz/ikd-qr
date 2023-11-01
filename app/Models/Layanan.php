<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Layanan extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'tbl_master_layanan';
    public $incrementing = false;

    protected $fillable = ['name', 'kode_layanan', 'nama_layanan'];

    protected $guard_name = 'web';

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['name'] ?? false, function ($query, $name) {
            return $query->where('name', 'ILIKE', '%' . $name . '%');
        });
    }
}
