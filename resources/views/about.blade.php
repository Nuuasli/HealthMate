<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="overflow-x-hidden">
    {{-- header section --}}
    <x-Navbar></x-Navbar>
    {{-- header section end --}}

    {{-- content about start --}}

    {{-- banner about --}}
    <section id="banner">
        <div class="w-full shadow-lg flex font-mono h-[700px] ">
            <div class="relative banner w-full h-full ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path class="shadow-lg" fill="#fff" fill-opacity="1"
                        d="M0,124L350,20L960,20L1440,162L1440,0L960,0L480,0L0,0Z"></path>
                </svg>
                <img src="img/banner-about.jpg" alt=""
                    class="relative -top-[280px] brightness-75 -z-10 w-full">
                <div class="absolute w-2/5 px-4 py-4 top-44 left-16">
                    <h1
                        class="inline-block bg-white  rounded-tr-lg backdrop-blur-lg font-Rowdies font-bold text-[37px] uppercase  text-primary px-4">
                        Kebugaran </h1>
                    <h1
                        class="inline-block bg-white  rounded-r-lg backdrop-blur-lg font-Rowdies font-bold text-[37px] uppercase  text-primary px-4">
                        Fungsional yang </h1>
                    <h1
                        class="inline-block bg-white  rounded-br-lg backdrop-blur-lg font-Rowdies font-bold text-[37px] uppercase  text-primary px-4">
                        sesuai dengan </h1>
                    <h1
                        class="inline-block bg-white  rounded-br-lg backdrop-blur-lg font-Rowdies font-bold text-[37px] uppercase  text-primary px-4">
                        jadwal Anda</h1>

                    <p class="font-medium text-md text-white backdrop-blur-sm p-2 rounded-md">Dengan HealthMate, kamu
                        bebas berlatih kapan saja! Platform kami
                        tersedia 24 jam sehari, mendukung aktivitas kebugaranmu tanpa batasan waktu. Latihan, kelas, dan
                        progress bisa diakses kapan pun sesuai jadwalmu.</p>
                </div>
                <div class="w-full mt-4 mx-4 ">
                    <div
                        class="absolute left-20 bottom-[70px] w-[150px] border-2 border-primary rounded-sm
                        bg-primary hover:bg-white focus:ring-1-primary">
                        <a href="#" class="flex px-6 py-2 justify-center text-white hover:text-primary ">JOIN
                            MEMBER</a>
                    </div>
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
    {{-- banner about end --}}

    {{-- service start --}}
    <section class="pt-20 shadow-lg shadow-dark">
        <div class="w-full">
            <div class="w-4/5 px-6 py-4 mx-auto">
                <div class="w-full px-5">
                    <h1 class="mx-auto text-center uppercase text-primary text-5xl font-Rowdies py-8">services
                    </h1>
                </div>
                <div class="flex flex-wrap">
                    <div class="mb-6 p-2 w-1/3 relative ">
                        <!-- Link wrapping the entire image with text overlay -->
                        <a href="/smClass" class="block rounded-md shadow-md overflow-hidden mx-auto group relative">
                            <!-- Image with grayscale effect and hover to color -->
                            <img src="img/13.jpg" alt=""
                                class="mx-auto w-full grayscale group-hover:grayscale-0 transition duration-300" />

                            <!-- Text overlay with smaller font and shadow -->
                            <span
                                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-Rowdies font-semibold z-10 text-primary text-3xl text-center uppercase  group-hover:bg-white rounded-lg text-shadow-md">
                                Small Group
                            </span>
                        </a>
                    </div>
                    <div class="mb-6 p-2 w-1/3 relative ">
                        <!-- Link wrapping the entire image with text overlay -->
                        <a href="/smClass" class="block rounded-md shadow-md overflow-hidden mx-auto group relative">
                            <!-- Image with grayscale effect and hover to color -->
                            <img src="img/15.jpg" alt=""
                                class="mx-auto w-full grayscale group-hover:grayscale-0 transition duration-300" />

                            <!-- Text overlay with smaller font and shadow -->
                            <span
                                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-Rowdies font-semibold z-10 text-primary text-3xl text-center uppercase  group-hover:bg-white rounded-lg text-shadow-md">
                                personal trainer
                            </span>
                        </a>
                    </div>
                    <div class="mb-6 p-2 w-1/3 relative ">
                        <!-- Link wrapping the entire image with text overlay -->
                        <a href="/smClass" class="block rounded-md shadow-md overflow-hidden mx-auto group relative">
                            <!-- Image with grayscale effect and hover to color -->
                            <img src="img/14.jpg" alt=""
                                class="mx-auto w-full grayscale group-hover:grayscale-0 transition duration-300" />

                            <!-- Text overlay with smaller font and shadow -->
                            <span
                                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-Rowdies font-semibold z-10 text-primary text-3xl text-center uppercase  group-hover:bg-white rounded-lg text-shadow-md">
                                24/7 gym
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- service end --}}

    {{-- misi start --}}
    <section class="pt-20 bg-slate-100">
        <div class="w-full">
            <div class="px-6 py-4 mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-1/2 p-4">
                        <div class="w-full mb-8">
                            <h1 class="text-5xl font-Rowdies uppercase text-primary mb-6 px-8 ">our visi</h1>
                            <p class="text-justify px-8 text-lg font-light">Menjadi pusat kebugaran terkemuka yang
                                menginspirasi
                                dan memberdayakan setiap individu untuk mencapai kesehatan dan kebugaran optimal,
                                melalui fasilitas modern, komunitas yang mendukung, dan program latihan yang
                                berkualitas.</p>
                        </div>
                        <div class="w-full mb-4">
                            <h1 class="text-5xl font-Rowdies uppercase text-primary mb-6 px-8 ">our mission</h1>
                            <p class="text-justify px-8 text-lg font-light">HealthMate bertujuan menyediakan fasilitas
                                kebugaran
                                terbaik dengan peralatan modern yang aman dan lingkungan yang selalu bersih, agar setiap
                                anggota merasa nyaman dalam mencapai tujuan kebugaran mereka. Kami membangun komunitas
                                yang ramah dan suportif, sehingga setiap individu merasa didukung dan termotivasi dalam
                                perjalanannya. Dengan pelatihan berkualitas yang dipandu oleh instruktur profesional,
                                kami menawarkan program dan kelas yang sesuai untuk semua level, dari pemula hingga
                                atlet. Kesehatan fisik, mental, dan emosional menjadi prioritas kami, karena kami
                                percaya pada pendekatan holistik untuk kesejahteraan. HealthMate terus berinovasi,
                                mengikuti tren kebugaran terbaru untuk memastikan anggota kami mendapatkan pengalaman
                                latihan yang terbaik.</p>
                        </div>
                    </div>

                    <div class="w-1/2 p-4">
                        <div class="w-full mb-8 flex">
                            <img src="img/16.jpg" alt="" class="w-full ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- misi end --}}

    {{-- option start --}}
    <section class="pt-20 pb-20 relative">
        <img src="img/5.png" class="absolute w-[370px] h-[370px] -right-5 -top-36" alt="">
        <h1 class="mx-auto text-center uppercase text-primary text-5xl font-Rowdies py-8">pilihan keanggotaan
        </h1>
        <p class="mx-auto text-center capitalize text-dark text-normal">pilihlah opsi latihan terbaik untuk
            anda dan target anda</p>
        <div class="button w-32 border-2 border-primary mx-auto hover:border-2 hover:border-primary my-6">
            <a href="/membership" class="flex px-3 py-2 justify-center text-dark hover:text-primary capitalize ">lihat
                harga</a>
        </div>
    </section>
    {{-- option end --}}


    {{-- content about end --}}

    {{-- footer start --}}
    <x-Footer></x-Footer>
    {{-- footer end --}}
</body>

</html>
