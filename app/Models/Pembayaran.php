<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table= 'data_pembayaran';
    protected $primaryKey = 'id';
    protected $fillable = ['nis', 'nama', 'tanggal', 'nominal', 'bukti', 'keterangan', 'created_at', 'updated_at'];
}