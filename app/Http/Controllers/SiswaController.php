<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $dtsiswa = Siswa::where('nama', 'LIKE', '%' .$request->search. '%')
            ->orWhere('nis', 'LIKE', '%' .$request->search. '%')->paginate(10);
        }else{
            $dtsiswa = Siswa::orderBy('id', 'desc')->paginate(10);
        }
        return view('/admin/features/siswa', compact('dtsiswa'), [
            'title' => 'Daftar Siswa',
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

        return redirect('/admin/features/siswa')->with('success', 'Anda berhasil menambahkan data siswa!');
    }

    public function edit($id)
    {
        $siswa = DB::table('siswa')->where('id', $id)->first();

        // $folder = 'admin.features.inc.result_siswa';

        // $html =  view($folder, compact('siswa'))->renderSections();

        return view('/admin/features/siswa');
    }

    public function update(Request $request, $id)
    {
        DB::table('siswa')->where('id', $id)->update([
            'nis'     => $request->nis,
            'nama'     => $request->nama,
            'kelas'     => $request->kelas,
            'jurusan'   => $request->jurusan
        ]);
        return redirect('/admin/features/siswa')->with('success', 'Anda berhasil merubah data siswa!');
    }

    public function destroy($id)
    {
        DB::table('siswa')->where('id', $id)->delete();
        return redirect('/admin/features/siswa')->with('success', 'Anda berhasil menghapus data siswa!');
    }
}