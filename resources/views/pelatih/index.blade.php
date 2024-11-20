<title>pelatih</title>
@extends('admin-layout')

@section('content')
    <section>
        <div class="p-6 w-full  bg-gray-100 flex flex-col  rounded-lg">
            <div class="flex items-center justify-between pb-4">
                <div class="mx-auto text-center">
                    <h2 class=" font-semibold uppercase px-4 pt-4 text-primary text-5xl font-Rowdies">Pelatih</h2>
                    <p class="text-md text-secondary px-4 pb-2 capitalize">daftar pelatih yang akan memandu di kelas.</p>
                </div>
                <a href="{{ route('pelatih.create') }}"
                    class="px-4 py-2 bg-primary text-white rounded-md hover:text-primary hover:bg-white hover:ring-2 hover:ring-primary capitalize">
                    tambah pelatih
                </a>
            </div>

            <div class="container bg-slate-200 py-4 px-4 rounded-lg mx-auto">
                <div class="overflow-x-auto">
                    <table class="w-full rounded-md border-2 text-center">
                        <thead>
                            <tr class="text-center border-2 border-black border-collapse  bg-slate-300">
                                <th class="px-6 py-3 text-black font-md uppercase border-2 border-black">ID</th>
                                <th class="px-6 py-3 text-black  font-md uppercase border-2 border-black">nama pelatih</th>
                                <th class="px-6 py-3 text-black  font-md uppercase border-2 border-black">telepon</th>
                                <th class="px-6 py-3 text-black  font-md uppercase border-2 border-black">email</th>
                                <th class="px-6 py-3 text-black  font-md uppercase">aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-300">
                            @foreach ($pelatihs as $k)
                                <tr class="">
                                    <td class="px-6 py-4 font-md text-secondary ">{{ $k->id }}</td>
                                    <td class="px-6 py-4 font-md text-secondary ">{{ $k->nama_pelatih }}</td>
                                    <td class="px-6 py-4 font-md text-secondary ">{{ $k->telepon }}</td>
                                    <td class="px-6 py-4 font-md text-secondary ">{{ $k->email }}</td>
                                    <td class="px-6 py-4 flex justify-end">
                                        <a href="{{ route('pelatih.edit', [$k->id]) }}"
                                            class="absolute right-[110px] text-sky-700 text-2xl px-2 py-2 border-2 border-slate-200 hover:border-2 rounded-full hover:border-sky-700"><i
                                                class="bi bi-pencil-square"></i></a>

                                        <form action="{{ route('pelatih.destroy', $k->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="-right-10 text-primary text-2xl px-2 py-2 border-2 border-slate-200 hover:border-2 rounded-full hover:border-primary bg-transparent"
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
