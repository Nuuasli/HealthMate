@extends('layout')

@section('content')
{{-- banner --}}
<section id="banner">
    <div class="w-full shadow-lg flex font-mono h-[700px] ">
        <div class="relative banner w-full h-full ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,0L1440,0L1440,130L720,0L720,0L0,0Z"></path>
            </svg>
            <img src="img/banner-trainer.jpg" alt=""
                class="relative -top-[280px] brightness-75 -z-10 w-full grayscale">
            <div class="absolute w-2/5 px-4 py-4 top-16 left-16">
                <h1
                    class="inline-block   rounded-tr-lg  font-Rowdies font-bold text-[37px] uppercase  text-primary px-4">
                    pelatih berpengalaman untuk membantu kamu meraih badan idealmu </h1>

                <p class="font-medium text-md text-white backdrop-blur-sm p-2 rounded-md">Kelas Pelatihan Kekuatan &
                    Pengkondisian Kelompok Kecil di HealthMate dirancang untuk membantu Anda meningkatkan kekuatan, daya
                    tahan otot, dan kesehatan kardiovaskular. Mulai dari pemanasan hingga repetisi terakhir, program ini
                    berfokus pada aktivasi, mobilitas, stabilitas, dan pencegahan cedera. Dengan HealthMate, Anda tak
                    hanya merasa hebat dan lebih bugar, tetapi juga terlihat kuat dan bergerak dengan optimal. Kami
                    melatih atlet gaya hidup sepanjang tahun!</p>

            </div>
        </div>
    </div>
</section>
{{-- banner end --}}

{{-- trainer contact --}}
<section class="pt-[60px]">
    <div class="w-full flex">
        <div class="w-1/2 bg-primary p-4 pb-10 ">
            <h1 class="text-2xl font-Rowdies uppercase text-center py-4">Personal trainer</h1>
            <p class="text-md font-normal text-justify p-4 mb-4">Di HealthMate, kami percaya bahwa setiap tujuan
                kebugaran layak mendapatkan panduan terbaik. Dengan bantuan personal trainer kami yang berpengalaman dan
                bersertifikasi, Anda akan mendapatkan perhatian penuh, program latihan yang disesuaikan dengan kebutuhan
                pribadi, serta motivasi yang tiada henti untuk mencapai hasil nyata. Baik Anda ingin membangun kekuatan,
                menurunkan berat badan, atau meningkatkan kebugaran secara keseluruhan, trainer kami siap membimbing
                setiap langkah Anda, memberikan panduan teknik yang tepat, serta mendukung perjalanan Anda menuju gaya
                hidup sehat.</p>
            <a href="/contact"
                class="ml-4 border-b-2 py-2 px-4  capitalize hover:ring-2 hover:ring-white hover:border-none">hubungi
                kami</a>
        </div>
        <div class="w-1/2 p-4 pb-10 ">
            <h1 class="text-2xl font-Rowdies uppercase text-center py-4 text-primary">Personal trainer</h1>
            <p class="text-md font-normal text-justify p-4 mb-4">Di HealthMate, kami memahami bahwa setiap perjalanan
                kebugaran itu unik dan memerlukan pendekatan yang tepat. Dengan semi-personal trainer kami yang
                profesional dan bersertifikat, Anda akan mendapatkan kombinasi dukungan individual dan kebersamaan dalam
                sesi latihan. Kami menawarkan program yang dirancang khusus untuk memenuhi kebutuhan dan tujuan Anda,
                sambil tetap menciptakan suasana yang mendukung di mana Anda bisa berlatih bersama orang lain. Apakah
                Anda ingin meningkatkan kekuatan, membakar lemak, atau hanya ingin lebih aktif, trainer kami siap
                mendampingi Anda!</p>
            <a href="/contact"
                class="ml-4 bg-primary py-2 px-4  capitalize hover:bg-white hover:ring-2 hover:ring-primary">hubungi
                kami</a>
        </div>

    </div>
</section>
{{-- trainer contact end --}}

@endsection
