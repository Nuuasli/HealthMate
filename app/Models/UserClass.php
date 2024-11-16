<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserClass extends Model
{
    use HasFactory;
    protected $table = 'pendaftarans'; // Nama tabel
    protected $fillable = ['user_id', 'kelas_id']; // Kolom yang diizinkan untuk diisi
}
