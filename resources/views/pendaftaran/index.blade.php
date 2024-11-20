<title>admin - pendaftaran</title>
@extends('admin-layout')

@section('content')
    <section>
        <div class="p-6 w-full bg-gray-100 flex flex-col  rounded-lg">
            <div class="flex items-center justify-between pb-4">
                <div class="mx-auto text-center">
                    <h2 class=" font-semibold uppercase px-4 pt-4 text-primary text-5xl font-Rowdies">pendaftaran kelas</h2>
                    <p class="text-md text-secondary px-4 pb-2 capitalize">daftar member yang sudah daftar kelas bulan ini
                    </p>
                </div>
            </div>

            <div class="container bg-slate-200 py-4 px-4 rounded-lg mx-auto">
                <div class="overflow-x-auto">
                    <table class="w-full rounded-md border-2 text-center">
                        <thead>
                            <tr class="text-center border-2 border-black border-collapse  bg-slate-300">
                                <th class="px-6 py-3 text-black font-md uppercase border-2 border-black">ID</th>
                                <th class="px-6 py-3 text-black  font-md uppercase border-2 border-black">nama member</th>
                                <th class="px-6 py-3 text-black  font-md uppercase border-2 border-black">email</th>
                                <th class="px-6 py-3 text-black  font-md uppercase border-2 border-black">kelas</th>
                                <th class="px-6 py-3 text-black  font-md uppercase">aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-300">
                            @foreach ($pendaftaran as $p)
                                <tr class="">
                                    <td class="px-6 py-4 font-md text-secondary ">{{ $p->id }}</td>
                                    <td class="px-6 py-4 font-md text-secondary ">{{ $p->nama }}</td>
                                    <td class="px-6 py-4 font-md text-secondary ">{{ $p->email }}</td>
                                    <td class="px-6 py-4 font-md text-secondary ">{{ $p->nama_kelas }}</td>
                                    <td class="px-6 py-4 flex justify-center">
                                        <form action="{{ route('pendaftaran.destroy', $p->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class=" text-primary text-2xl px-2 py-2 border-2 border-slate-200 hover:border-2 rounded-full hover:border-primary bg-transparent"
                                                title="Delete">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
