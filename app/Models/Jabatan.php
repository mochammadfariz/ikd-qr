<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


// class Jabatan extends Model
// {
//     use HasFactory, SoftDeletes;
//     protected $table = 'tbl_master_jabatan';

//     public $incrementing = false;

//     protected $fillable = ['id', 'name'];

//     protected $guard_name = 'web';

//     public function scopeFilter($query, array $filters)
//     {
//         $query->when($filters['name'] ?? false, function ($query, $name) {
//             return $query->where('name', 'ILIKE', '%' . $name . '%');
//         });
//     }
// }

class Jabatan extends Model
{
use HasFactory, SoftDeletes;
protected $table = 'tbl_master_jabatan';

public $incrementing = false;

protected $fillable = ['name'];

protected $guard_name = 'web';

public function scopeFilter($query, array $filters)
{
    $query->when($filters['name'] ?? false, function ($query, $name) {
        return $query->where('name', 'ILIKE', '%' . $name . '%');
    });
}
}
