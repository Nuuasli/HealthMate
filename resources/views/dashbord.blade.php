<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    {{-- header section --}}
    <header class="w-[85%] mx-auto font-mono">
        <nav class=" my-4">
            <div class="container mx-auto flex items-center justify-evenly  relative">
                <!-- Left Links (About, Service) -->
                <div class="flex  ml-52">
                    <a href="#about"
                        class="text-black tracking-widest  text-lg font-semibold relative p-4 
                    hover:text-primary before:absolute before:bottom-2 before:left-0 
                    before:w-full before:h-[2px] before:bg-primary before:scale-x-0 
                    before:origin-center hover:before:scale-x-100 before:transition 
                    before:duration-300">
                        ABOUT
                    </a>
                    <div class="relative group mt-4">
                        <a href="#services"
                            class="text-black tracking-widest text-lg font-semibold relative p-4 
                            hover:text-primary before:absolute before:bottom-1 before:left-0 
                            before:w-full before:h-[2px] before:bg-primary before:scale-x-0 
                            before:origin-center hover:before:scale-x-100 before:transition 
                            before:duration-300">
                            SERVICES
                        </a>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute -left-14 hidden group-hover:block bg-black text-white border-collapse mt-4 shadow-lg z-10 w-64">
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
                    <a href="#" class="text-white text-2xl font-bold"><img class="w-full h-28"
                            src="img/healthmate.png" alt="Logo"></a>
                </div>

                <!-- Right Links (Membership, Contact) -->
                <div class="flex mr-48">
                    <a href="#"
                        class="text-black tracking-widest text-lg font-semibold relative p-4 
                    hover:text-primary before:absolute before:bottom-2 before:left-0 
                    before:w-full before:h-[2px] before:bg-primary before:scale-x-0 
                    before:origin-center hover:before:scale-x-100 before:transition 
                    before:duration-300">MEMBERSHIP</a>
                    <a href="#contact"
                        class="text-black tracking-widest text-lg font-semibold relative p-4 
                    hover:text-primary before:absolute before:bottom-2 before:left-0 
                    before:w-full before:h-[2px] before:bg-primary before:scale-x-0 
                    before:origin-center hover:before:scale-x-100 before:transition 
                    before:duration-300 ">CONTACT</a>
                </div>
            </div>
        </nav>
    </header>
    {{-- header section end --}}

    {{-- main section --}}
    <section>
        
    </section>

    {{-- main section end --}}
</body>

</html>
