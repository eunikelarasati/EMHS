<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task'; //untuk mengakses data
    protected $fillable = [ //untuk CRUD data
        'nama',
        'judul_task',
        'deskripsi_task'
    ];
}
