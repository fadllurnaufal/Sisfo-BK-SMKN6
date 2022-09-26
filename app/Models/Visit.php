<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table = "visit_report";
    protected $primaryKey = "id";
    protected $fillable = [
        'bidang_layanan',
        'fungsi_layanan',
        'topik',
        'pihak_terlibat',
        'tujuan_kegiatan',
        'gambaran',
        'alamat',
        'tanggal',
        'anggota_keluarga',
        'evaluasi',
        'tindak_lanjut',
        'catatan',
        'guru',
    ];
}
