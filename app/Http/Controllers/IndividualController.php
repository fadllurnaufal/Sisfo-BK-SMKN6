<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use App\Models\Siswa;
use Illuminate\Http\Request;

class IndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        if($request->has('search')){
            $dtsiswa = Siswa::where('nama', 'LIKE', '%' .$request->search. '%')
            ->orWhere('nis', 'LIKE', '%' .$request->search. '%')->paginate(10);
        }else{
            $dtsiswa = Siswa::orderBy('id', 'desc')->paginate(10);
        }
        return view('/admin/features/individual', compact('dtsiswa'), [
            'title' => 'Konseling Individu',
            'subtitle' => 'Bimbingan Konseling SMK Negeri 6 Bandung'
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal'   => 'required',
            'pertemuan'  => 'required',
            'waktu'  => 'required',
            'tempat'  => 'required',
            'pendekatan'    => 'required',
            'hasil'    => 'required',
            'guru'    => 'required',
        ]);

        $date = date('Y-m-d',  strtotime($request->tanggal));

        Individual::create([
            'tanggal'     => $date,
            'pertemuan'  => $request->pertemuan,
            'waktu'     => $request->waktu,
            'tempat'   => $request->tempat,
            'pendekatan'   => $request->pendekatan,
            'hasil'   => $request->hasil,
            'guru'   => $request->guru
        ]);
        return redirect('/admin/features/individual')->with('success', 'Anda berhasil menambahkan data konseling individu!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function show(Individual $individual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function edit(Individual $individual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Individual $individual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Individual $individual)
    {
        //
    }
}
