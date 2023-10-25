<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class petugas extends Authenticatable
{
    use HasFactory;
    public $timestamps = false;


    protected $fillabel = [
        'id', 
        'nama_petugas', 
        'username', 
        'password', 
        'telp', 
        'level'
    ];


    protected $table = "petugas";

    
}
