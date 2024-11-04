@extends('layout')

{{-- banner section --}}
@section('content')
<section id="banner">
    <div class="w-full shadow-lg flex font-mono h-[700px] ">
        <div class="relative banner w-full h-full ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path class="shadow-lg" fill="#fff" fill-opacity="1"
                    d="M0,94L350,0L960,80L1440,32L1440,0L960,0L480,0L0,0Z"></path>
            </svg>
            <img src="img/banner.jpg" alt="" class="relative -top-[280px] -z-10 grayscale">
            <div class="absolute w-1/2 px-4 py-4 top-44 left-16 ">
                <h1
                    class="inline-block backdrop-blur-sm rounded-tr-lg  font-Rowdies font-bold text-[40px]  text-primary px-4">
                    GYM PREMIUM</h1>
                <h1
                    class="inline-block backdrop-blur-sm rounded-r-lg  font-Rowdies font-bold text-[40px]  text-primary px-4">
                    DENGAN 24-JAM </h1>
                <h1
                    class="inline-block backdrop-blur-sm font-Rowdies font-bold text-[40px]  text-primary px-4">
                    AKSES MASUK </h1>
                <h1
                    class="inline-block backdrop-blur-sm rounded-r-lg  font-Rowdies font-bold text-[40px]  text-primary px-4">
                    DAN JADWAL LATIHAN</h1>
                <p class="font-medium text-md text-white backdrop-blur-sm p-2 rounded-md">Dengan HealthMate, kamu
                    bebas berlatih kapan saja! Platform kami
                    tersedia 24 jam sehari, mendukung aktivitas kebugaranmu tanpa batasan waktu. Latihan, kelas, dan
                    progress bisa diakses kapan pun sesuai jadwalmu.</p>
            </div>
            <div class="w-full mt-4 mx-4 ">
                <div
                    class="absolute left-20 bottom-[70px] w-[150px] border-2 border-primary rounded-sm
                        bg-primary hover:bg-white focus:ring-1-primary">
                    <a href="/membership" class="flex px-6 py-2 justify-center text-white hover:text-primary ">JOIN
                        MEMBER</a>
                </div>
            </div>
            <div class="w-full absolute top-[450px] -z-10">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#020202" fill-opacity="1"
                        d="M0,62L480,210L860,256L1440,120L1440,320L960,320L480,320L0,320Z"></path>
                </svg>

            </div>
        </div>
    </div>
</section>

<section id="about" class="relative bg-slate-100">
    <div class="absolute -top-[210px] -right-4 ">
        <img src="img/5.png" alt="">
    </div>
    <div class="w-full px-4 ">
        <div class="w-full relative container pt-20 pb-6 mx-auto">
            <div class="w-1/2 mx-auto">
                <h1 class="text-center text-3xl font-bold text-primary font-passion italic tracking-wide ">
                    FUNGSIONAL. RAMAH. SETIAP HARI. SETIAP SAAT</h1>
            </div>
            <div class=" mx-auto w-3/5 my-10">
                <p class="text-center text-lg p-2 text-secondary"><span class="font-bold text-dark">Selamat datang
                        di HealthMate, tempat gym
                        yang
                        menawarkan pengalaman kebugaran yang berbeda!</span>
                    Nikmati fasilitas premium kami dengan ruang terbuka yang luas, jendela besar, dan area latihan
                    yang dilengkapi dengan peralatan modern untuk memastikan setiap sesi latihan Anda maksimal.
                    Dengan dua pintu garasi yang terbuka untuk sirkulasi udara segar, Anda akan merasa nyaman
                    berolahraga di sini.</p>
                <p class="text-center text-lg p-2 text-secondary">Sebagai anggota HealthMate, Anda mendapatkan akses
                    eksklusif ke
                    jaringan profesional kesehatan terbaik kami, termasuk Ahli Gizi Bersertifikat, Koki Persiapan
                    Makanan, dan Pelatih Pribadi handal yang siap membantu Anda mencapai target kebugaran.</p>
                <p class="text-center text-xl p-4 font-normal uppercase">Bergabunglah dengan kami sekarang dan
                    rasakan pengalaman latihan
                    yang luar biasa di HealthMate!</p>
            </div>
        </div>
    </div>
</section>

<section id="small-group" class="pt-36 w-full shadow-lg">
    <div class="container mx-auto">
        <div class="w-full px-6 py-4">
            <div class="flex flex-wrap">
                <div class=" w-1/2 p-6">
                    <span class="absolute bg-primary w-[300px] h-[500px] -mt-12 -z-10 left-0">
                    </span>
                    <div class="z-10"> <img src="img/6.jpg" alt=""></div>

                </div>
                <div class=" w-1/2 p-6">
                    <h1
                        class="text-2xl font-bold tracking-wide italic text-primary font-passion text-center -mt-24 px-6">
                        GROUP POWERLIFTER & KELAS KEBUGARAN</h1>
                    <div class="p-6 mx-auto relative">
                        <p class="p-2 font-normal">Siap untuk menguji kekuatan dan meningkatkan stamina tubuhmu?
                            HealthMate
                            menawarkan dua
                            kelas unggulan yang dirancang khusus untuk membantu kamu mencapai potensi terbaik dalam
                            kebugaran!</p>
                        <p class="p-2 font-light"><span class="uppercase font-bold text-dark">Kelas
                                Powerlifter</span>
                            Ingin meningkatkan kekuatan otot dan mencapai performa maksimal? Kelas Powerlifter kami
                            siap membimbingmu menguasai teknik angkat berat dengan aman dan efektif. Cocok untuk
                            semua level, dari pemula hingga atlet yang ingin mengasah kekuatan.</p>
                        <p class="p-2 font-light"><span class="uppercase font-bold text-dark">Kelas Kebugaran
                                Jasmani</span>
                            Latihan menyeluruh untuk kebugaran tubuh! Kelas ini menggabungkan kardio, kekuatan, dan
                            fleksibilitas dalam sesi yang dinamis dan menyenangkan. Cocok untuk meningkatkan
                            stamina, membakar kalori, dan menjaga tubuh tetap bugar.</p>
                        <p class="p-2 font-light">Kelas-kelas kami di HealthMate bukan hanya sekadar latihan, tapi
                            kesempatan untuk membentuk tubuh yang lebih kuat, sehat, dan penuh energi. <span
                                class="uppercase font-normal">Jangan lewatkan kesempatan ini! Daftar
                                sekarang dan rasakan sendiri perubahan nyata di tubuhmu!</span> </p>

                        <div class="w-full mt-24 ">
                            <div
                                class="absolute ml-2 bottom-[70px] w-[150px] border-2 border-primary rounded-sm
                                        bg-primary hover:bg-white focus:ring-1-primary">
                                <a href="#"
                                    class="flex px-6 py-2 justify-center text-white hover:text-primary ">IKUTI
                                    KELAS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="personal-training" class="pt-36 bg-dark">
    <div class="w-full">
        <div class="px-6 mx-auto">
            <div class="w-full px-6 py-4">
                <div class="flex flex-wrap">
                    <div class="w-1/2 p-6 text-white mx-auto">
                        <h1 class="text-3xl font-semibold font-Rowdies tracking-wider text-primary italic p-6">
                            PERSONAL
                            TRAINING</h1>
                        <p class="px-6 py-4 font-normal ">
                            <span class="font-bold">Ingin Hasil Maksimal? Bergabunglah dengan Personal Training di
                                HealthMate!</span>
                            Dapatkan program latihan yang dirancang khusus untuk kebutuhan dan tujuan kebugaran Anda
                            dengan bimbingan langsung dari pelatih profesional kami. Baik Anda ingin menurunkan
                            berat badan, meningkatkan kekuatan, atau membentuk tubuh ideal, kami siap membantu Anda
                            setiap langkahnya.
                        </p>
                        <p class="px-6 py-4 font-normal ">🔥 Manfaatkan sesi personal training untuk :
                        <ul class="list-disc px-12">
                            <li>Program latihan yang dipersonalisasi</li>
                            <li>Panduan teknik yang benar agar terhindar dari cedera</li>
                            <li>Motivasi ekstra dan dukungan terus-menerus</li>
                        </ul>
                        </p>

                        <p class="px-6 py-4 font-semibold text-lg">Jangan lewatkan kesempatan untuk mencapai hasil
                            terbaik
                            dalam
                            waktu lebih singkat!
                            Jadwalkan sesi personal training Anda di HealthMate sekarang dan rasakan perubahan
                            nyata.</p>

                        <div
                            class="button w-40 border-b-2 border-primary ml-5 mt-4 hover:border-2 hover:border-primary ">
                            <a href="#"
                                class="flex px-3 py-3 justify-center text-white hover:text-primary ">Hubungi
                                Kami</a>
                        </div>
                    </div>
                    <div class="w-1/2 p-6 text-white mx-auto relative ">
                        <span class="absolute w-[450px] h-[560px] bg-primary -top-6 right-0 rounded-lg"></span>
                        <img class="absolute w-[450px] rounded-lg right-10 mx-auto" src="img/7.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="member-option" class="pt-10 shadow-lg shadow-dark">
    <div class="w-full">
        <div class="w-full px-6 py-4 mx-auto ">
            <h1 class="mx-auto text-center uppercase text-primary text-5xl font-Rowdies py-8">pilihan keanggotaan
            </h1>
            <p class="mx-auto text-center capitalize text-dark text-normal">pilihlah opsi latihan terbaik untuk
                anda dan target anda</p>
            <div class="button w-32 border-2 border-primary mx-auto hover:border-2 hover:border-primary my-6">
                <a href="/membership"
                    class="flex px-3 py-2 justify-center text-dark hover:text-primary capitalize ">lihat harga</a>
            </div>
            <div class="flex flex-wrap">
                <div class="w-1/2 p-2">
                    <div class="p-6">
                        <h1 class="uppercase text-primary font-semibold text-4xl py-4">member gym</h1>
                        <p class="capitalize font-light text-md py-4">Dapatkan akses 24/7 ke gym kami dengan
                            fasilitas
                            canggih yang ramah hewan peliharaan dengan disediakan kamar mandi dan sauna untuk
                            kebebasan
                            anda latihan sendiri di waktu Anda sendiri.</p>
                        <a href="" class="text-primary border-b-2 capitalize py-2 border-primary ">lihat
                            lebih
                            lanjut</a>
                    </div>
                    <div class="p-4">
                        <h1 class="uppercase text-primary font-semibold text-4xl py-4">kebugaran & power lifter
                        </h1>
                        <p class="capitalize font-light text-md py-4">Dapatkan akses 24/7 ke gym kami ditambah
                            kelas
                            kebugaran dan kelompok kecil untuk fokus pada pengembangan dan penyempurnaan kekuatan
                            dan
                            daya tahan otot dan kardiovaskular.</p>
                        <a href="" class="text-primary border-b-2 capitalize py-2 border-primary ">
                            jadwalkan kelas pertama anda</a>
                    </div>
                </div>
                <div class="w-1/2 p-2">
                    <div class="p-6 relative">
                        <img src="img/9.jpeg" alt=""
                            class="w-full rounded-xl mt-16 shadow-lg shadow-secondary">
                        <span
                            class="bg-primary w-[550px] h-[360px] absolute rounded-xl top-16 right-0 -z-10 shadow-lg shadow-secondary"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="fasilitas" class="pt-20 bg-slate-100">
    <div class="w-full">
        <div class="w-full px-6 py-4 mx-auto">
            <div class="flex flex-wrap">
                <div class="w-1/2 p-2">
                    <div class="p-6 relative">
                        <img src="img/11.png" alt=""
                            class="w-11/12 mt-10 ml-6 rounded-lg shadow-slate-600 shadow-lg">
                        <img src="img/10.jpg" alt=""
                            class="w-11/12 mt-10 ml-6 rounded-lg shadow-slate-600 shadow-lg">
                        <img src="img/12.jpg" alt=""
                            class="w-2/3 mt-10 shadow-slate-600 top-48 left-0 rounded-lg shadow-inner absolute">
                    </div>
                </div>
                <div class="w-1/2 p-2">
                    <div class="p-6 mx-auto">
                        <h1 class="uppercase text-primary font-semibold text-4xl  text-center">fasilitas kami
                        </h1>
                        <h1 class="capitalize text-dark font-light text-md p-4 text-justify">HealthMate
                            menghadirkan fasilitas gym yang nyaman dan modern, dirancang dengan ruang terbuka yang
                            luas agar setiap anggota bisa berlatih dengan bebas. Gym ini menyediakan area latihan
                            lengkap dengan peralatan terbaru, mulai dari alat kardio hingga mesin angkat beban yang
                            canggih, mendukung segala kebutuhan kebugaran Anda.
                        </h1>
                        <div class="flex flex-wrap">
                            <div class="w-1/2">
                                <ul class="list-disc px-12">
                                    <li class="p-1">Treadmill</li>
                                    <li class="p-1">Elliptical Trainer</li>
                                    <li class="p-1">Stationary Bike</li>
                                    <li class="p-1">Rowing Machine</li>
                                    <li class="p-1">Lat Pulldown Machine</li>
                                    <li class="p-1">Leg Press Machine</li>
                                    <li class="p-1">Chest Press Machine</li>
                                    <li class="p-1">Smith Machine</li>
                                    <li class="p-1">Cable Machine</li>
                                    <li class="p-1">Full set Dumbbells</li>
                                    <li class="p-1">Barbells</li>
                                    <li class="p-1">Kettlebells</li>


                                </ul>
                            </div>
                            <div class="w-1/2">
                                <ul class="list-disc px-12">
                                    <li class="p-1">Weight Plates</li>
                                    <li class="p-1">Adjustable Bench</li>
                                    <li class="p-1">Pull-up Bar</li>
                                    <li class="p-1">Battle Ropes</li>
                                    <li class="p-1">Medicine Balls dan Slam Balls</li>
                                    <li class="p-1">TRX Suspension Trainer</li>
                                    <li class="p-1">Plyo Boxes</li>
                                    <li class="p-1">Foam Rollers</li>
                                    <li class="p-1">Stretching Mats</li>
                                    <li class="p-1">Resistance Bands</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
{{-- banner section end --}}
@endsection


