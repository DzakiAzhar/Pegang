<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logbook extends Model
{
    use HasFactory;

    protected $table = "logbook";

    protected $fillable = [
        'nim',
        'tanggal',
        'kegiatan',
    ];

}