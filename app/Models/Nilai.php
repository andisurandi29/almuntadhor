<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table= 'data_nilai';
    protected $fillable = ['nis', 'pelajaran', 'kehadiran', 'tugas', 'uts', 'uas'];
}
