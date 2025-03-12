<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documentasi extends Model
{
    protected $table = 'documentasis';
    protected $fillable = [
        'title',
        'avatar'
    ];
}
