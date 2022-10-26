<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Siswa;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::query()->get();
        $dtgroup = Group::orderBy('id', 'desc')->paginate(10);

        return view('/admin/features/group', compact('siswas', 'dtgroup'),[
            'title' => 'Konseling Kelompok',
            'subtitle' => 'Bimbingan Konseling SMK Negeri 6 Bandung'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
     //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'tanggal'   => 'required',
            'pertemuan'  => 'required',
            'waktu'  => 'required',
            'tempat'  => 'required',
            'pendekatan'    => 'required',
            'hasil'    => 'required',
            'id_siswa'    => 'required',
            'guru'    => 'required',
        ]);

        $input = $request->all();
        $id_siswa = $input['id_siswa'];
        $input['id_siswa'] = implode(', ', $id_siswa);

        Group::create($input);

        // $data['id_siswa'] = json_encode($request->id_siswa);

        
        return redirect('/admin/features/group')->with('success', 'Anda berhasil menambahkan data konseling kelompok!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswas = Siswa::query()->get();
        $group = Group::query()->where('id',$id)->first();

        $folder = "admin.features.inc.detail_group";
        $html = view($folder, compact('group', 'siswas'))->renderSections();

        return response()->json([
            'html'=> $html,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswas = Siswa::query()->get();
        $group = Group::query()->where('id',$id)->first();

        $folder = "admin.features.inc.result_group";
        $html = view($folder, compact('group', 'siswas'))->renderSections();

        return response()->json([
            'html'=> $html,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function updateGroup(Request $request)
    {
        $input = $request->all();
        $dtgroup = Group::query()->where('id', $input['id'])->first();
        $dtgroup->tanggal = $request['tanggal'];
        $dtgroup->pertemuan = $request['pertemuan'];
        $dtgroup->waktu = $request['waktu'];
        $dtgroup->tempat = $request['tempat'];
        $dtgroup->pendekatan = $request['pendekatan'];
        $dtgroup->hasil = $request['hasil'];
        $dtgroup->guru = $request['guru'];
        $dtgroup->save();

        return redirect('/admin/features/group')->with('success', 'Anda berhasil merubah data konseling kelompok!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group =  Group::query()->where('id', $id)->first();

        if ($group) {
            $group->delete();
        }
        return true;
    }
}
