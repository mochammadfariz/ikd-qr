<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionStatus extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tbl_transaction_status';
    protected $fillable = [
        'nama_status',
    ];
}
