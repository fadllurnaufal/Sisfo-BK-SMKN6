<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jurnal;

class JurnalController extends Controller{
    public function index(Request $request){
        if($request->has('search')){
            $dtjurnal = Jurnal::where('tanggal', 'LIKE', '%' .$request->search. '%')
            ->orWhere('guru', 'LIKE', '%' .$request->search. '%')->paginate(10);
        }else{
            $dtjurnal = Jurnal::orderBy('id', 'desc')->paginate(10);
        }
        return view('/admin/features/jurnal', compact('dtjurnal'),[
            'title' => 'Jurnal Harian'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal'   => 'required',
            'sasaran_kegiatan'  => 'required',
            'layanan_kegiatan'  => 'required',
            'hasil_kegiatan'  => 'required',
            'guru'    => 'required',
        ]);


        // dd($request->all());

        $date = date('Y-m-d',  strtotime($request->tanggal));
  
        Jurnal::create([
            'tanggal'     => $date,
            'sasaran_kegiatan'     => $request->sasaran_kegiatan,
            'layanan_kegiatan'     => $request->layanan_kegiatan,
            'hasil_kegiatan'   => $request->hasil_kegiatan,
            'guru'   => $request->guru
        ]);

        return redirect('/admin/features/jurnal')->with('success', 'Anda berhasil menambahkan data jurnal harian!');
    }

    public function edit($id)
    {
        DB::table('jurnal')->where('id', $id)->all();
        return view('/admin/features/jurnal', compact('dtsiswa'));
    }

    public function update(Request $request, $id)
    {
        DB::table('jurnal')->where('id', $id)->update([
            'nis'     => $request->nis,
            'nama'     => $request->nama,
            'kelas'     => $request->kelas,
            'jurusan'   => $request->jurusan
        ]);
        return redirect('/admin/features/jurnal')->with('success', 'Anda berhasil merubah data siswa!');
    }

    public function destroy($id)
    {
        DB::table('jurnal')->where('id', $id)->delete();
        return redirect('/admin/features/jurnal')->with('success', 'Anda berhasil menghapus data siswa!');
    }

}
