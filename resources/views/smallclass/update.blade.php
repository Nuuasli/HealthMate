<title>edit kelas</title>
@extends('layout')

@section('content')
    <div class="container bg-slate-300 py-20">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">update Data kelas</h2>
            <form action="{{ route('classes.update', [$data->id]) }}" method="POST" class="mt-6">
                @csrf
                @method('PUT')
                <!-- ID -->

                <!-- Nama Kelas -->
                <div class="mb-4">
                    <label for="nama_kelas" class="block text-gray-700">Nama Kelas</label>
                    <input type="text" id="nama_kelas" name="nama_kelas"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        placeholder="Nama Kelas" value="{{ $data->nama_kelas }}" required>
                </div>

                <!-- pelatih -->
                <div class="mb-4">
                    <label for="id_pelatih" class="block text-gray-700">Pelatih</label>
                    <select name="id_pelatih" id="id_pelatih"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
                        <option value="" disabled selected class="text-secondary">Pilih Pelatih</option>
                        @foreach ($pelatihs as $k)
                            <option value="{{ $k->id }}" @if ($k->id == $data->id_pelatih) selected @endif>
                                {{ $k->nama_pelatih }}</option>
                        @endforeach

                    </select>

                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="jam" class="block text-gray-700">Jam</label>
                    <input type="jam" id="jam" name="jam"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        placeholder="Masukan Jam" value="{{ $data->jam }}" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="jam_selesai" class="block text-gray-700">jam selesai</label>
                    <input type="jam_selesai" id="jam_selesai" name="jam_selesai"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        placeholder="Masukan jam_selesai" value="{{ $data->jam_selesai }}" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="Quota" class="block text-gray-700">Quota</label>
                    <input type="Quota" id="Quota" name="Quota"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        placeholder="Masukan Quota Kelas" value="{{ $data->Quota }}" required>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end mt-6">
                    <button type="submit"
                        class="px-6 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
