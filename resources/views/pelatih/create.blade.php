@extends('layout')

@section('content')
    <div class="container bg-slate-300 py-20 mx-auto">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">Tambah Data Pelatih</h2>
            <form method="POST" action="{{ route('pelatih.store') }}" class="mt-6">
                @csrf
                <!-- ID -->
                <div class="mb-4 hidden">
                    <label for="id" class="block text-gray-700">ID</label>
                    <input type="text" id="id" name="id"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        placeholder="" required>
                </div>

                <!-- Nama Member -->
                <div class="mb-4">
                    <label for="nama_pelatih" class="block text-gray-700">Nama Pelatih</label>
                    <input type="text" id="nama_pelatih" name="nama_pelatih"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        placeholder="Nama Lengkap" required>
                </div>

                <!-- Telepon -->
                <div class="mb-4">
                    <label for="telepon" class="block text-gray-700">Telepon</label>
                    <input type="tel" id="telepon" name="telepon"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        placeholder="Nomor Telepon" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                        placeholder="Alamat Email" required>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end mt-6">
                    <button type="submit"
                        class="px-6 py-2
                        text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
