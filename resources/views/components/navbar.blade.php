<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/HealthMate.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    @vite('resources/css/app.css')
    <title>{{ env('APP_NAME') }}</title>
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
                            src="img/healthmate.png" alt="Logo"></a>
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
            <div
                class="absolute right-16 top-12  button w-[115px] border-2 border-primary rounded-sm bg-primary hover:bg-white  focus:ring-1-primary">
                <a href="/login" class="flex px-6 py-1 justify-center text-white hover:text-primary ">SIGN UP</a>
            </div>
        </nav>
    </header>
