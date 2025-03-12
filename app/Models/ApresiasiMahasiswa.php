<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApresiasiMahasiswa extends Model
{
    protected $table = 'apresiasi_mahasiswas';
    protected $fillable = [
        'nama',
        'foto',
        'deskripsi',
        'prestasi',
    ];
}
