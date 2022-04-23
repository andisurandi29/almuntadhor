<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAkun extends Model
{
    use HasFactory;
    protected $table= 'users';
    protected $fillable = ['name', 'username', 'level', 'email', 'password', 'created_at', 'updated_at'];
}
