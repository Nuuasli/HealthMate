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
                        <a href="" class="text-primary border-b-2 capitalize py-2 border-primary ">
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
                            <form method="POST" action="{{ route('smClass.store') }}">
                                @csrf
                                <input type="hidden" name="kelas_id" value="{{ $k->id }}">
                                {{-- <input type="hidden" name="user_id" value="{{ $user_id }}"> --}}
                                <button type="submit"
                                        class="px-8 py-2 bg-primary rounded-full hover:bg-opacity-90 hover:ring-2 hover:ring-primary hover:text-white">
                                    Daftar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</section>

{{-- scadule classes end --}}

@endsection
