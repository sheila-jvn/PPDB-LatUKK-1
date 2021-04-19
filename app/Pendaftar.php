<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{

    protected $fillable = [
        'noreg', 'nama', 'jk', 'alamat', 'agama', 'asal_sekolah', 'minat_jurusan'
    ];
}
