<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'id', 'nama', 'fakultas', 'prodi'
        ];

    public $timestamps = false;    
}
