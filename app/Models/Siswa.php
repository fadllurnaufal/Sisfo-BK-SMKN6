<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Siswa extends Model
{
    use Sortable;

    protected $table = "siswa";
    protected $primaryKey = "nis";
    protected $fillable = [
        'nis', 'nama', 'kelas', 'jurusan'
    ];

    public $sortable = ['nis', 'nama', 'kelas', 'jurusan' ,'created_at', 'updated_at'];

}

