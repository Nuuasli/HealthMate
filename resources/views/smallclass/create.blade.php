@extends('layout')

@section('content')
    <div class="container bg-slate-300 py-20">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">Tambah Data Member</h2>
            <form action="{{ route('smallclass.store') }}" method="POST " class="mt-6">
                @csrf
                <!-- ID -->
                <div class="mb-4 hidden">
                    <label for="id" class="block text-gray-700">ID</label>
                    <input type="text" id="id" name="id"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        placeholder="ID Member" required>
                </div>

                <!-- Nama Kelas -->
                <div class="mb-4">
                    <label for="nama_kelas" class="block text-gray-700">Nama Kelas</label>
                    <input type="text" id="nama_kelas" name="nama_kelas"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        placeholder="Nama Kelas" required>
                </div>

                <!-- pelatih -->
                <div class="mb-4">
                    <label for="pelatih" class="block text-gray-700">Pelatih</label>
                    <input type="tel" id="pelatih" name="pelatih"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        placeholder="Nama Pelatih" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="Jam" class="block text-gray-700">Jam</label>
                    <input type="Jam" id="Jam" name="Jam"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        placeholder="Masukan Jam" required>
                </div>
                
                <!-- Email -->
                <div class="mb-4">
                    <label for="Quota" class="block text-gray-700">Quota</label>
                    <input type="Quota" id="Quota" name="Quota"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        placeholder="Masukan Quota Kelas" required>
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
