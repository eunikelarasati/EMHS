<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa'; //untuk mengakses data
    protected $fillable = [ //untuk CRUD data
        'nim',
        'nama',
        'gender',
        'prodi',
        'minat'
    ];
}
