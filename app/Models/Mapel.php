<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table= 'mapel';
    protected $fillable = ['nama_mapel', 'guru'];

    public function mapelSantri() {
        return $this->hasMany(SantriMapel::class, 'mapel_id');
    }
}
