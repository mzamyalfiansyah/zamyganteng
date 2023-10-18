<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pengaduan";

    protected $fillabel = ['tgl_ppengaduan', 'nik', 'isi_laporan', 'foto', 'status'];
}
