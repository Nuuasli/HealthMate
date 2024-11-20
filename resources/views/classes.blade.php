<title>{{ config('app.name') }} - Classes & Schedule</title>
@extends('layout')

@section('content')
    {{-- banner --}}
    <section id="banner">
        <div class="w-full shadow-lg flex font-mono h-[700px] ">
            <div class="relative banner w-full h-full ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#fff" fill-opacity="1" d="M0,0L1440,0L1440,130L720,0L720,0L0,0Z"></path>
                </svg>
                <img src="img/banner-service.png" alt=""
                    class="relative -top-[280px] brightness-75 -z-10 w-full grayscale">
                <div class="absolute w-2/5 px-4 py-4 top-16 left-16">
                    <h1
                        class="inline-block   rounded-tr-lg  font-Rowdies font-bold text-[37px] uppercase  text-primary px-4">
                        Pelatihan dalam kelompok untuk meningkatkan banyak kemampuan </h1>

                    <p class="font-medium text-md text-white backdrop-blur-sm p-2 rounded-md">HealthMate bertujuan
                        Kelas Small Group Strength & Conditioning Training di HealthMate dirancang untuk membantu Anda
                        mengembangkan dan meningkatkan kekuatan serta daya tahan otot dan kardiovaskular. Mulai dari
                        pemanasan hingga repetisi terakhir, program ini berfokus pada aktivasi, mobilitas, stabilitas,
                        dan pencegahan cedera, sehingga Anda tidak hanya menurunkan berat badan dan merasa hebat, tetapi
                        juga terlihat kuat, merasa kuat, dan yang paling penting, bergerak dengan baik. Kami melatih
                        para "lifestyle athlete" sepanjang tahun!</p>

                </div>

                <div class="w-full absolute -bottom-[66px] -z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#020202" fill-opacity="1"
                            d="M0,62L480,210L860,256L1440,120L1440,320L960,320L480,320L0,320Z"></path>
                    </svg>

                </div>
            </div>
        </div>
    </section>
    {{-- banner end --}}

    {{-- small classes start --}}
    <section id="member-option" class="pt-10 shadow-lg shadow-dark">
        <div class="w-full">
            <div class="w-full px-6 py-4 mx-auto ">
                <div class="flex flex-wrap">
                    <div class="w-1/2 p-2">
                        <div class="p-6 relative">
                            <img src="img/9.jpeg" alt="" class="w-full rounded-xl mt-16 shadow-lg shadow-secondary">
                            <span
                                class="bg-primary w-[550px] h-[360px] absolute rounded-xl top-16 left-0 -z-10 shadow-lg shadow-secondary"></span>
                        </div>
                    </div>
                    <div class="w-1/2 p-2">
                        <div class="p-4">
                            <h1 class="uppercase text-primary font-semibold font-Rowdies text-4xl pt-20">Grup kecil
                                dengan pelatih
                            </h1>
                            <p class="capitalize font-light text-md py-4">Jumlah peserta dibatasi maksimal 10 orang per
                                kelas, sehingga setiap klien mendapatkan pengalaman latihan yang lebih personal sambil
                                tetap menikmati suasana menyenangkan bersama teman-teman baru.</p>
                            <a href="/membership" class="text-primary border-b-2 capitalize py-2 border-primary ">
                                jadwalkan kelas pertama anda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- small classes end --}}

    {{-- scadule classes --}}
    <section id="scadule" class="pt-20 bg-slate-100">
        <div class="w-full">
            <div class="px-6 py-4 mx-auto">
                <div class="w-full">
                    <h1 class="uppercase text-2xl text-center px-10">Harap dicatat, bagi klien baru,<span
                            class="text-primary underline">yuk jadwalkan kunjungan singkat ke fasilitas kami</span>
                        sebelum bergabung di kelas pertama!</h1>
                </div>
                <div class="container flex flex-col pt-20  w-4/5 mx-auto">
                    @foreach ($kelass as $k)
                        <div class="flex px-4 py-4 justify-between bg-white rounded-lg shadow-xl border-2 mb-2">
                            <div class="w-1/2 flex justify-start">
                                <div class="flex flex-col ml-10 mr-20">
                                    <p class="text-sm">{{ $k->jam }} am</p>
                                    <p class="text-xs ml-2 text-secondary">{{ $k->jam_selesai }} am</p>
                                </div>
                                <div class="flex flex-col ">
                                    <h1 class="text-md capitalize font-bold font-Rowdies">{{ $k->nama_kelas }}</h1>
                                    <p class="text-sm text-secondary">bersama {{ $k->id_pelatih }}</p>
                                </div>
                            </div>
                            <div class="w-3/5 flex justify-end">
                                <div class="flex mr-7 ">
                                    <p class="text-sm my-auto">{{ $k->Quota }} orang</p>
                                </div>

                                <div class="flex flex-col mr-7 h-2">
                                    <!-- Button to Open Modal -->
                                    <button onclick="openModal('{{ $k->id }}', '{{ $k->nama_kelas }}')"
                                        class="px-8 py-2 bg-primary rounded-full hover:bg-opacity-90 hover:ring-2 hover:ring-primary hover:text-white">
                                        Daftar
                                    </button>
                                </div>

    <!-- modal tambahan-->

                                <!-- Modal -->
                                <div id="modalForm"
                                    class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
                                    <div class="bg-white rounded-lg shadow-lg w-1/3">
                                        <!-- Modal Header -->
                                        <div class="flex justify-between items-center bg-gray-100 px-4 py-2 border-b">
                                            <h3 class="w-full font-Rowdies text-2xl font-semibold text-center">Form Pendaftaran</h3>
                                            <button onclick="closeModal()" class="text-gray-600 hover:text-gray-900">&times;</button>
                                        </div>
                                
                                        <!-- Modal Body -->
                                        <div class="p-4">
                                            <form method="POST" action="{{ route('smClass.store') }}">
                                                @csrf
                                
                                                <!-- Input Nama -->
                                                <div class="mb-4">
                                                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                                                    <input type="text" name="nama" id="nama"
                                                        class="mt-1 block px-2 py-2 w-full rounded-md border-gray-300 shadow-sm focus:ring-primary focus:border-primary sm:text-sm"
                                                        required>
                                                </div>
                                
                                                <!-- Input Email -->
                                                <div class="mb-4">
                                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input type="email" name="email" id="email"
                                                        class="mt-1 block px-2 py-2 w-full rounded-md border-gray-300 shadow-sm focus:ring-primary focus:border-primary sm:text-sm"
                                                        required>
                                                </div>
                                
                                                <!-- Input Kelas -->
                                                <div class="mb-4">
                                                    <label for="kelas_id" class="block text-sm font-medium text-gray-700">Kelas</label>
                                                    <input type="text" name="kelas_id" id="kelas_nama" readonly
                                                        class="mt-1 block px-2 py-2 w-full rounded-md border-gray-300 bg-gray-100 shadow-sm sm:text-sm">
                                                </div>
                                
                                                <!-- Hidden Input untuk ID Kelas -->
                                                <input type="hidden" name="kelas_id" id="kelas_id">
                                
                                                <!-- Submit Button -->
                                                <button type="submit"
                                                    class="w-full py-2 px-4 bg-primary text-white rounded-md hover:bg-opacity-90">
                                                    Submit
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
    <!-- modal tambahan-->

                                {{-- //button oneclik --}}
                                {{-- <div class="flex flex-col mr-7 h-2">
                            <form method="POST" action="{{ route('smClass.store') }}">
                                @csrf
                                <input type="hidden" name="kelas_id" value="{{ $k->id }}">
                                <button type="submit"
                                        class="px-8 py-2 bg-primary rounded-full hover:bg-opacity-90 hover:ring-2 hover:ring-primary hover:text-white">
                                    Daftar
                                </button>
                            </form>
                        </div> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>

    {{-- scadule classes end --}}
@endsection
