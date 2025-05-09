<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    protected $fillable = [
        'kode_mk', 'nama_mk', 'jurusan', 'tahun_akademik',
        'semester', 'nama_dosen', 'ruang', 'hari', 'jam_mulai', 'jam_selesai'
    ];

}
