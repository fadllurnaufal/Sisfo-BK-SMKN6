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
       'id', 'nis', 'nama', 'kelas', 'jurusan'
    ];

    public $sortable = ['nis', 'nama', 'kelas', 'jurusan' ,'created_at', 'updated_at'];

    // public function scopeFilter($query){
    //     if(request('search')){
    //         return $query->where('nis', 'like', '%' . request('search') . '%')
    //         ->orWhere->where('nama', 'like', '%' . request('search') . '%');
    //     }
    // }

}

