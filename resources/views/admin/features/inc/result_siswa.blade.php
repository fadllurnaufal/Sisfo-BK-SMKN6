@section('content')
<form class="space-y-6 my-10" action="{{ url('edit', $siswa->id) }}" method="POST">
    @method('patch')
    @csrf
    <div class="mx-4 mb-5">
        <label for="nis" class="text-xs text-gray-400">NIS :</label>
        <input type="text" name="nis" id="nis" onfocus="this.value=''" value="{{ $siswa->nis}}" class="bg-white border border-gray-300 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 mt-1 mb-2 font-light drop-shadow-sm  text-gray-400 hover:bg-gray-50 duration-200" required="">
        <label for="nama" class="text-xs text-gray-400">Nama :</label>
        <input type="text" name="nama" id="nama" onfocus="this.value=''" value="{{ $siswa->nama}}" class="bg-white border border-gray-300 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 mt-1 mb-2 font-light drop-shadow-sm text-gray-400 hover:bg-gray-50 duration-200" required="">
        <label for="kelas" class="text-xs text-gray-400">Kelas :</label>
        <select type="text" name="kelas" id="kelas" value="{{ $siswa->kelas}}" class="bg-white border border-gray-300 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 mt-1 mb-2 font-light drop-shadow-sm text-gray-400 hover:bg-gray-50 duration-200" required="">
                <option selected>{{ $siswa->kelas}}</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
        </select>
        <label for="jurusan" class="text-xs text-gray-400">Jurusan :</label>
        <select type="text" name="jurusan" id="jurusan" value="{{ $siswa->jurusan}}" class="bg-white border border-gray-300 text-gray-400 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 mt-1 mb-2 font-light drop-shadow-sm placeholder:text-gray-300 hover:bg-gray-50 duration-200" required="">
            <option selected >{{ $siswa->jurusan}}</option>
            <option value="Pengelasan">Pengelasan</option>
            <option value="DPIB">DPIB</option>
            <option value="TKRO">TKRO</option>
            <option value="TITL">TITL</option>
            <option value="TPM">TPM</option>
            <option value="TAV">TAV</option>
        </select>
    </div>
    <button type="submit" class="w-80 mx-4 text-white bg-tosca-300 hover:bg-tosca-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-md px-5 py-2.5 text-center">Simpan Data</button>
</form>
@endsection