<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    protected $table = "cases";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'tanggal', 'nis', 'nama', 'kelas', 'jurusan', 'kasus', 'guru'
    ];
}
