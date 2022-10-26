@section('content')

<div class="mx-4 mb-5">
    <input type="hidden" id="id" name="id" value="{{ $group->id }}">
    <label for="id_siswa" class="text-xs text-gray-400">Anggota Kelompok</label>
    <input disabled id="id_siswa" name="id_siswa[]" value="{{ $group->id_siswa }}" class="select2 border border-gray-300 text-gray-400 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-3 p-2.5 px-4 my-3 rounded-xl cursor-default" multiple="multiple">
    <label for="tanggal" class="text-xs text-gray-400">Tanggal Kegiatan:</label>
    <input disabled type="date" name="tanggal" id="tanggal" value="{{ $group->tanggal }}" class="border border-gray-300 text-gray-500 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-3 p-2.5 px-4 my-3 rounded-xl cursor-default">
    <label for="pertemuan" class="text-xs text-gray-400">Pertemuan ke- :</label>
    <input disabled type="text" name="pertemuan" id="pertemuan" value="{{ $group->pertemuan }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200" required>
    <label for="waktu" class="text-xs text-gray-400">Waktu :</label>
    <input disabled type="text" name="waktu" id="waktu" value="{{ $group->waktu }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200" required>
    <label for="tempat" class="text-xs text-gray-400">Tempat :</label>
    <input disabled type="text" name="tempat" id="tempat" value="{{ $group->tempat }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200" required>
    <label for="pendekatan" class="text-xs text-gray-400">Pendekatan dan teknik konseling yang digunakan :</label>
    <textarea disabled type="text" name="pendekatan" id="pendekatan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200" required> 
        {{ $group->pendekatan }}
    </textarea>
    <label for="hasil" class="text-xs text-gray-400">Hasil yang Dicapai :</label>
    <textarea disabled type="text" name="hasil" id="hasil" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200" required> 
        {{ $group->hasil }}
    </textarea>
</div>
<div class="flex mx-4 mb-5 justify-between">
    <div class="">
        <label for="guru" class="text-xs text-gray-400">Guru BK/ Konselor :</label>
        <input disabled type="text" name="guru" id="guru" value="{{ $group->guru }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-40 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required>
    </div>
</div>

@endsection