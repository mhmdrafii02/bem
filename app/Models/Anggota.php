<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggota extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =
    [
        'name',
        'avatar',
        'divisi_id',
    ];
}
