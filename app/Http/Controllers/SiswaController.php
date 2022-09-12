<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index(){
    $dtsiswa = Siswa::orderBy('id', 'desc')->paginate(10);
        return view('/admin/features/siswa.base', compact('dtsiswa'), [
            'title' => 'Daftar Siswa',
        ]);
    }

    
    public function add(){
        return view('/admin/features/siswa.base',[
            'title' => 'Tambah Data Siswa'
            ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nis'     => 'required|min:9|max:13|unique:siswa,nama',
            'nama'     => 'required|unique:siswa,nama',
            'kelas'     => 'required',
            'jurusan'     => 'required',
        ]);

        Siswa::create([
            'nis'     => $request->nis,
            'nama'     => $request->nama,
            'kelas'     => $request->kelas,
            'jurusan'   => $request->jurusan
        ]);

        return redirect('/admin/features/siswa/base');
    }

    public function edit($id)
    {
        DB::table('siswa')->where('id', $id)->all();
        return view('/admin/features/siswa.base', compact('dtsiswa'));
    }

    public function update(Request $request, $id)
    {
        DB::table('siswa')->where('id', $id)->update([
            'nis'     => $request->nis,
            'nama'     => $request->nama,
            'kelas'     => $request->kelas,
            'jurusan'   => $request->jurusan
        ]);

        return redirect('/admin/features/siswa/base');
    }

    public function destroy($id)
    {
        DB::table('siswa')->where('id', $id)->delete();
        return redirect('/admin/features/siswa/base');
    }
}