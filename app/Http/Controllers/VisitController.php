<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Siswa;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $dtsiswa = Siswa::where('nis', 'LIKE', '%' .$request->search. '%')
            ->orWhere('nama', 'LIKE', '%' .$request->search. '%')->paginate(10);
        }else{
            $dtsiswa = Siswa::orderBy('id', 'desc')->paginate(10);
        }
        return view('/admin/features/visit', compact('dtsiswa'), [
            'title' => 'Kunjungan Rumah'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'bidang_layanan'   => 'required',
            'fungsi_layanan'  => 'required',
            'topik'  => 'required',
            'pihak_terlibat'  => 'required',
            'tujuan_kegiatan'    => 'required',
            'gambaran'    => 'required',
            'alamat'    => 'required',
            'tanggal'    => 'required',
            'anggota_keluarga'    => 'required',
            'evaluasi'    => 'required',
            'tindak_lanjut'    => 'required',
            'catatan'    => 'required',
            'guru'    => 'required',
        ]);

        Visit::create([
            'bidang_layanan'   => $request->bidang_layanan,
            'fungsi_layanan'  => $request->fungsi_layanan,
            'topik'  => $request->topik,
            'pihak_terlibat'  => $request->pihak_terlibat,
            'tujuan_kegiatan'    => $request->tujuan_kegiatan,
            'gambaran'    => $request->gambaran,
            'alamat'    => $request->alamat,
            'tanggal'    => $request->alamat,
            'anggota_keluarga'    => $request->anggota_keluarga,
            'evaluasi'    => $request->evaluasi,
            'tindak_lanjut'    => $request->tindak_lanjut,
            'catatan'    => $request->catatan,
            'guru'    => $request->guru
        ]);
        return redirect('/admin/features/visit')->with('success', 'Anda berhasil menambahkan data jurnal harian!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit(Visit $visit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
        //
    }
}
