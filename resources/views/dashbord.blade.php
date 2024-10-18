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
    <header class="  font-mono">
        <nav class=" my-4 w-[85%] mx-auto flex">
            <div class="container mx-auto flex items-center justify-center  relative">
                <!-- Left Links (About, Service) -->
                <div class="flex">
                    <a href="#about"
                        class="text-dark tracking-widest  text-md font-semibold relative p-4 
                    hover:text-primary before:absolute before:bottom-2 before:left-0 
                    before:w-full before:h-[2px] before:bg-primary before:scale-x-0 
                    before:origin-center hover:before:scale-x-100 before:transition 
                    before:duration-300">
                        ABOUT
                    </a>
                    <div class="flex group ">
                        <a href="#services"
                            class="text-dark tracking-widest text-md font-semibold relative p-4 
                            hover:text-primary before:absolute before:bottom-1 before:left-0 
                            before:w-full before:h-[2px] before:bg-primary before:scale-x-0 
                            before:origin-center hover:before:scale-x-100 before:transition 
                            before:duration-300">
                            SERVICES
                        </a>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute top-14 left-56 hidden group-hover:block bg-black text-white border-collapse mt-4 shadow-lg z-10 w-64">
                            <a href="#service1"
                                class="block font-medium px-4 py-2 tracking-widest hover:bg-primary border-b-2 border-white">Classes
                                and
                                Schedule</a>
                            <a href="#service2"
                                class="block font-medium px-4 py-2 tracking-widest hover:bg-primary border-b-2 border-white">Personal
                                Trainer</a>
                            <a href="#service3"
                                class="block font-medium px-4 py-2 tracking-widest hover:bg-primary border-b-2 border-white">Nutrition</a>
                            <a href="#service3"
                                class="block font-medium px-4 py-2 tracking-widest hover:bg-primary border-b-2 border-white">24/7
                                GYM</a>
                        </div>
                    </div>
                </div>

                <!-- Logo (Centered) -->
                <div class="flex justify-center px-4 py-1">
                    <a href="#" class="text-white text-2xl font-bold"><img class="w-full h-24"
                            src="img/healthmate.png" alt="Logo"></a>
                </div>

                <!-- Right Links (Membership, Contact) -->
                <div class="flex mr-46">
                    <a href="#"
                        class="text-dark tracking-widest text-md font-semibold relative p-4 
                    hover:text-primary before:absolute before:bottom-2 before:left-0 
                    before:w-full before:h-[2px] before:bg-primary before:scale-x-0 
                    before:origin-center hover:before:scale-x-100 before:transition 
                    before:duration-300">MEMBERSHIP</a>
                    <a href="#contact"
                        class="text-dark tracking-widest text-md font-semibold relative p-4 
                    hover:text-primary before:absolute before:bottom-2 before:left-0 
                    before:w-full before:h-[2px] before:bg-primary before:scale-x-0 
                    before:origin-center hover:before:scale-x-100 before:transition 
                    before:duration-300 ">CONTACT</a>
                </div>
            </div>
            <div
                class="absolute right-16 top-12  button w-[115px] border-2 border-primary rounded-sm bg-primary hover:bg-white  focus:ring-1-primary">
                <a href="#" class="flex px-6 py-1 justify-center text-white hover:text-primary ">SIGN UP</a>
            </div>
        </nav>
    </header>
    {{-- header section end --}}

    {{-- banner section --}}
    <section>
        <div class="w-full shadow-lg flex font-mono h-[700px] ">
            <div class="relative banner w-full h-full ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path class="shadow-lg" fill="#fff" fill-opacity="1"
                        d="M0,94L350,0L960,80L1440,32L1440,0L960,0L480,0L0,0Z"></path>
                </svg>
                <img src="img/banner.jpg" alt="" class="relative -top-[280px] -z-10 grayscale">
                <div class="absolute w-5/12 px-4 py-4 top-44 left-16">
                    <h1
                        class="inline-block bg-white  rounded-tr-lg backdrop-blur-lg font-protest font-bold text-[40px]  text-primary px-4">
                        GYM PREMIUM</h1>
                    <h1
                        class="inline-block bg-white rounded-r-lg backdrop-blur-sm font-protest font-bold text-[40px]  text-primary px-4">
                        DENGAN 24-JAM </h1>
                    <h1
                        class="inline-block bg-white backdrop-blur-sm font-protest font-bold text-[40px]  text-primary px-4">
                        AKSES MASUK </h1>
                    <h1
                        class="inline-block bg-white rounded-r-lg backdrop-blur-sm font-protest font-bold text-[40px]  text-primary px-4">
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
                        <a href="#" class="flex px-6 py-2 justify-center text-white hover:text-primary ">JOIN
                            MEMBER</a>
                    </div>
                </div>
                <div class="w-full absolute top-[450px] -z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#000" fill-opacity="1"
                            d="M0,62L480,210L860,256L1440,120L1440,320L960,320L480,320L0,320Z"></path>
                    </svg>

                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-slate-100">
        <div class="absolute -top-[210px] -right-4 ">
            <img src="img/5.png" alt="">
        </div>
        <div class="w-full px-4 ">
            <div class="w-full relative container pt-20 pb-6 ">
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

    <section class="pt-36">
        <div class="container">
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
                            <p class="p-2 font-light"><span class="uppercase font-bold text-primary">Kelas
                                    Powerlifter</span>
                                Ingin meningkatkan kekuatan otot dan mencapai performa maksimal? Kelas Powerlifter kami
                                siap membimbingmu menguasai teknik angkat berat dengan aman dan efektif. Cocok untuk
                                semua level, dari pemula hingga atlet yang ingin mengasah kekuatan.</p>
                            <p class="p-2 font-light"><span class="uppercase font-bold text-primary">Kelas Kebugaran
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

    
    {{-- banner section end --}}
</body>

</html>
