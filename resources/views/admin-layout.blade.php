<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/img/hm-logo.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite('resources/css/app.css')
    <title>{{ config('app.name') }}</title>
</head>

<body class="overflow-x-hidden">
    <header class="font-mono bg-white">
        <nav class=" py-3 w-[85%] mx-auto flex ">
            <div class="container mx-auto flex items-center justify-center  relative">
                <!-- Left Links (About, Service) -->
                <div class="flex">
                    <a href="/about"
                        class="text-dark tracking-widest  text-md font-semibold relative p-4
                hover:text-primary before:absolute before:bottom-2 before:left-0
                before:w-full before:h-[2px] before:bg-primary before:scale-x-0
                before:origin-center hover:before:scale-x-100 before:transition
                before:duration-300">
                        ABOUT
                    </a>
                    <div class="flex group ">
                        <a href="/services"
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
                            <a href="/smClass"
                                class="block font-medium px-4 py-2 tracking-widest hover:bg-primary border-b-2 border-white">Classes
                                and
                                Schedule</a>
                            <a href="/trainer"
                                class="block font-medium px-4 py-2 tracking-widest hover:bg-primary border-b-2 border-white">Personal
                                Trainer</a>
                            <a href="/gym"
                                class="block font-medium px-4 py-2 tracking-widest hover:bg-primary border-b-2 border-white">24/7
                                GYM</a>
                        </div>
                    </div>
                </div>

                <!-- Logo (Centered) -->
                <div class="flex justify-center px-4 py-1">
                    <a href="/" class="text-white text-2xl font-bold"><img class="w-full h-24"
                            src="/img/healthmate.png" alt="Logo"></a>
                </div>

                <!-- Right Links (Membership, Contact) -->
                <div class="flex mr-46">
                    <a href="/membership"
                        class="text-dark tracking-widest text-md font-semibold relative p-4
                hover:text-primary before:absolute before:bottom-2 before:left-0
                before:w-full before:h-[2px] before:bg-primary before:scale-x-0
                before:origin-center hover:before:scale-x-100 before:transition
                before:duration-300">MEMBERSHIP</a>
                    <a href="/contact"
                        class="text-dark tracking-widest text-md font-semibold relative p-4
                hover:text-primary before:absolute before:bottom-2 before:left-0
                before:w-full before:h-[2px] before:bg-primary before:scale-x-0
                before:origin-center hover:before:scale-x-100 before:transition
                before:duration-300 ">CONTACT</a>
                </div>
            </div>
        </nav>
    </header>
        <!-- resources/views/components/sidebar.blade.php -->
<div class="h-full w-64 bg-white border-r border-gray-200 flex flex-col">
    <!-- Menu -->
    <nav class="flex-1 px-4 py-6 space-y-4">
        <h1 class="flex font-Rowdies text-3xl items-center px-4 py-2 text-primary rounded-lg">
            <a href="{{ route('admin.index') }}"><span class="ml-3">Dashboard</span></a>
        </h1>
        <a href="{{ route('member.index') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-indigo-600 rounded-lg">
            <span class="text-xl"><i class="bi bi-people"></i></span>
            <span class="ml-3 capitalize">member</span>
        </a>
        <a href="{{ route('pelatih.index') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-indigo-600 rounded-lg">
            <span  class="text-xl"><i class="bi bi-person-raised-hand"></i></span>
            <span class="ml-3 capitalize">pelatih</span>
        </a>
        <a href="{{ route('classes.index') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-indigo-600 rounded-lg">
            <span  class="text-xl"><i class="bi bi-journals"></i></span>
            <span class="ml-3 capitalize">kelas</span>
        </a>
        <a href="{{ route('pendaftaran.index') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-indigo-600 rounded-lg">
            <span class="text-xl"><i class="bi bi-people"></i></span>
            <span class="ml-3 capitalize">pendaftaran</span>
        </a>
    </nav>

    <!-- Teams -->
    <div class="px-4 py-6">
        <h2 class="text-xl ml-6 font-Rowdies text-primary font-semibol uppercase tracking-wide">Opsi</h2>
        <div class="mt-4 space-y-2">
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <span  class="text-xl ml-4"><i class="bi bi-door-open"></i></span>
                <button type="submit" class="btn btn-danger ml-2">Logout</button>
            </form>
            <a href="/register" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-lg">
                <span  class="text-xl"><i class="bi bi-person-plus"></i></span>
                <span class="ml-3 capitalize">Register user</span>
            </a>
        </div>
    </div>
</div>

    @yield('content')

    <footer class="bg-black text-white py-10 px-6 w-full flex flex-col min-h-[500px]">
        <div class="container mx-auto flex flex-wrap justify-between mt-20">
            <!-- Left Section (Contact Info) -->
            <div class="w-full md:w-1/3 mb-8 md:mb-0">
                <img src="/img/HealthMate2.png" alt="HealthMate Logo" class="mb-4 w-4/6">
                <p class="ml-10">Brookfield,Illinois,<br> Amerika Serikat</p>
                <p class="mt-4 ml-10">(123) 345-6789</p>
                <a href="mailto:info@healthmate.com" class="hover:text-primary ml-10">info@healthmate.com</a>
            </div>

            <!-- Middle Section (Navigation Links) -->
            <div class="flex flex-wrap w-full md:w-1/3 mb-8 md:mb-0">
                <div class="mx-auto">
                    <ul>
                        <li class="mb-6"><a href="/" class="hover:text-primary font-semibold uppercase">Home</a>
                        </li>
                        <li class="mb-6"><a href="/about"
                                class="hover:text-primary font-semibold uppercase">About</a>
                        </li>
                        <li class="mb-6"><a href="/service"
                                class="hover:text-primary font-semibold uppercase">Service</a>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto">
                    <ul>
                        <li class="mb-6"><a href="/membership"
                                class="hover:text-primary font-semibold uppercase">Membership</a>
                        </li>
                        <li class="mb-6"><a href="/contact"
                                class="hover:text-primary font-semibold uppercase">Contact</a>
                        </li>
                        <div class="flex mt-4">
                            <a href="#" target="_blank"
                                class="text-primary hover:text-white w-9 h-9 text-center mr-2">
                                <svg role="img" class="fill-current" width="25" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Facebook</title>
                                    <path
                                        d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z" />
                                </svg></a>
                            <a href="#" target="_blank" class="text-primary hover:text-white w-9 h-9 text-center">
                                <svg role="img" class="fill-current" width="25" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Instagram</title>
                                    <path
                                        d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                                </svg></a>
                        </div>
                    </ul>
                </div>
            </div>

            <!-- Right Section (Newsletter Signup) -->
            <div class="w-full md:w-1/3 mx-auto text-center">
                <h3 class="font-bold uppercase mb-4 text-xl">Stay in the Know</h3>
                <form action="#" method="POST" class="mb-4 w-3/4 mx-auto">
                    <input type="email" placeholder="Email Address" target="_blank" class="w-full p-2 text-black">
                    <button type="submit"
                        class="bg-primary text-white px-4 py-2 mt-2 w-full uppercase">Subscribe</button>
                </form>
                <!-- Social Icons -->
            </div>
        </div>

        <!-- Bottom Copyright Section, sticks to the bottom -->
        <div class="container mx-auto mt-auto text-center text-sm flex flex-wrap">
            <div class="mx-auto">
                <p>&copy; 2024 HealthMate | Brookfield Gym, Training & Fitness</p>
            </div>

            <div class="mx-auto">
                <p>Site design by <a href="https://tailwindcss.com/" target="_blank"
                        class="text-blue-400 hover:underline">Tailwindcss</a> |
                    Built by <a href="https://laravel.com/" target="_blank" class="text-primary hover:underline">Laravel</a></p>
            </div>

        </div>
    </footer>

    {{-- script maps --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = session('success'))
        <script>
            Swal.fire({
                title: "Good Job!",
                text: "{{ $message }}",
                icon: "success"
            });
        </script>
    @endif

    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                title: "You in trable",
                text: "{{ $message }}",
                icon: "error"
            });
        </script>
    @endif


    <script>
        // Inisialisasi peta pada elemen dengan id "map"
        var map = L.map('map').setView([41.811169, -87.852293], 15); // Koordinat Jakarta (contoh)

        // Tambahkan layer OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Tambahkan marker pada lokasi
        L.marker([41.811169, -87.852293]).addTo(map)
            .bindPopup('<b>HealthMate Gym</b><br>Lokasi kami di sini.')
            .openPopup();
    </script>
    {{-- script maps --}}
</body>

</html>
