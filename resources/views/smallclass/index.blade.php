@extends('layout')

@section('content')
    <section>
        <div class="p-6 bg-gray-100 rounded-lg shadow-md">
            <div class="flex items-center justify-between pb-4">
                <div>
                    <h2 class=" font-semibold uppercase px-4 pt-4 text-primary text-5xl font-Rowdies">classes</h2>
                    <p class="text-md text-secondary px-4 pb-2 capitalize">beberapa list kelas yang bisa diikuti oleh member gym</p>
                </div>
                <a href=""
                    class="px-4 py-2 bg-primary text-white rounded-md capitalize hover:text-primary hover:bg-white hover:ring-2 hover:ring-primary">
                    Add kelas
                </a>
            </div>

            <div class="container bg-slate-200 py-4 px-4 rounded-lg mx-auto">
                <div class="overflow-x-auto">
                    <table class="w-full rounded-md border-2 text-center">
                        <thead>
                            <tr class="text-center border-2 border-black border-collapse  bg-slate-300">
                                <th class="px-6 py-3 text-black w-10 font-md uppercase border-2 border-black">ID</th>
                                <th class="px-6 py-3 text-black w-48 font-md uppercase border-2 border-black">nama kelas</th>
                                <th class="px-6 py-3 text-black w-48 font-md uppercase border-2 border-black">pelatih</th>
                                <th class="px-6 py-3 text-black w-24 font-md uppercase border-2 border-black">jam</th>
                                <th class="px-6 py-3 text-black w-24 font-md uppercase border-2 border-black">Quota</th>
                                <th class="px-6 py-3 text-black w-32 font-md uppercase">aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-300">
                            <tr class="">
                                <td class="px-6 py-4 font-md text-secondary ">1</td>
                                <td class="px-6 py-4 font-md text-secondary ">Kelas Kebugaran</td>
                                <td class="px-6 py-4 font-md text-secondary ">Jhon weak</td>
                                <td class="px-6 py-4 font-md text-secondary ">07:00</td>
                                <td class="px-6 py-4 font-md text-secondary ">8/10</td>
                                <td class="px-6 py-4 flex justify-around">
                                    <a href="" class="text-sky-700 text-2xl px-2 py-1 border-2 border-slate-200 hover:border-2 rounded-full hover:border-sky-700"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="text-primary text-2xl px-2 py-1 border-2 border-slate-200 hover:border-2 rounded-full hover:border-primary"><i class="bi bi-trash3"></i></a>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-6 py-4 font-md text-secondary ">1</td>
                                <td class="px-6 py-4 font-md text-secondary ">Kelas Kebugaran</td>
                                <td class="px-6 py-4 font-md text-secondary ">Jhon weak</td>
                                <td class="px-6 py-4 font-md text-secondary ">07:00</td>
                                <td class="px-6 py-4 font-md text-secondary ">8/10</td>
                                <td class="px-6 py-4 flex justify-around">
                                    <a href="" class="text-sky-700 text-2xl px-2 py-1 border-2 border-slate-200 hover:border-2 rounded-full hover:border-sky-700"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="text-primary text-2xl px-2 py-1 border-2 border-slate-200 hover:border-2 rounded-full hover:border-primary"><i class="bi bi-trash3"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
