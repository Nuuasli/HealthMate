<title>member</title>
@extends('layout')

@section('content')
    <section>
        <div class="p-6 bg-gray-100 rounded-lg shadow-md">
            <div class="flex items-center justify-between pb-4">
                <div class="w-[10%] text-center">
                    <a href="/admin" class="text-3xl"><i class="bi bi-arrow-left-circle"></i></a>
                </div>
                <div class="mx-auto text-center">
                    <h2 class=" font-semibold uppercase px-4 pt-4 text-primary text-5xl font-Rowdies">member</h2>
                    <p class="text-md text-secondary px-4 pb-2 capitalize">daftar member bulan ini</p>
                </div>
                <a href="{{ route('member.create') }}"
                    class="px-4 py-2 bg-primary text-white rounded-md hover:text-primary hover:bg-white hover:ring-2 hover:ring-primary capitalize">
                    tambah member
                </a>
            </div>

            <div class="container bg-slate-200 py-4 px-4 rounded-lg mx-auto">
                <div class="overflow-x-auto">
                    <table class="w-full rounded-md border-2 text-center">
                        <thead>
                            <tr class="text-center border-2 border-black border-collapse  bg-slate-300">
                                <th class="px-6 py-3 text-black font-md uppercase border-2 border-black">ID</th>
                                <th class="px-6 py-3 text-black  font-md uppercase border-2 border-black">nama member</th>
                                <th class="px-6 py-3 text-black  font-md uppercase border-2 border-black">telepon</th>
                                <th class="px-6 py-3 text-black  font-md uppercase border-2 border-black">email</th>
                                <th class="px-6 py-3 text-black  font-md uppercase">aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-300">
                            @foreach ($members as $m)
                                <tr class="relative">
                                    <td class="px-6 py-4 font-md text-secondary ">{{ $m->id }}</td>
                                    <td class="px-6 py-4 font-md text-secondary ">{{ $m->nama_member }}</td>
                                    <td class="px-6 py-4 font-md text-secondary ">{{ $m->telepon }}</td>
                                    <td class="px-6 py-4 font-md text-secondary ">{{ $m->email }}</td>
                                    <td class="px-6 py-4 flex justify-end">
                                        <a href="{{ route('member.edit', [$m->id]) }}"
                                            class="absolute right-20 text-sky-700 text-2xl px-2 py-2 border-2 border-slate-200 hover:border-2 rounded-full hover:border-sky-700"><i
                                                class="bi bi-pencil-square"></i></a>
                                                
                                                <form action="{{ route('member.destroy', $m->id) }}" method="POST" style="display:inline;">
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
