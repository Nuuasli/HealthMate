<title>{{ config('app.name') }} - Contact Us</title>
@extends('layout')

@section('content')
{{-- contact --}}
<section class="pt-10 w-full">
    <div class="w-full py-4 px-6">
        <h1 class="text-5xl text-primary font-Rowdies uppercase">contact us</h1>
        <div class="flex flex-wrap">
            <div class="right w-1/2 px-6">
                <div class="container mx-auto px-4 py-8">
                    <div id="map" class="w-[450px] h-[450px] shadow-lg border border-gray-200 ">
                    </div>
                </div>

            </div>
            <div class="left w-1/2 px-2 py-4">
                <div class="w-full">
                    <form method="POST" action="{{ route('contact.store') }}"  class="space-y-6 w-full">
                        @csrf
                        <!-- Nama Depan dan Belakang -->
                        <div>
                            <div class="flex space-x-4 mt-2">
                                <div class="w-full">
                                    <label for="name" class="block text-gray-700 font-normal">First Name<span
                                            class="text-red-500"> *</span></label>
                                    <input type="text" name="first_name" id="first_name"
                                        class="w-full p-2 border bg-slate-100 border-gray-300  focus:outline-none focus:border-gray-500">
                                </div>
                                <div class="w-full">
                                    <label for="name" class="block text-gray-700 font-normal">Last Name<span
                                            class="text-red-500"> *</span></label>
                                    <input type="text" name="last_name" id="last_name"
                                        class="w-full p-2 border bg-slate-100 border-gray-300  focus:outline-none focus:border-gray-500">
                                </div>


                            </div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-gray-700 font-normal">Email <span
                                    class="text-red-500"> *</span></label>
                            <input type="email" name="email" id="email" placeholder=""
                                class="w-full p-2 border bg-slate-100 border-gray-300  mt-2 focus:outline-none focus:border-gray-500">
                        </div>

                        <!-- Telepon -->
                        <div>
                            <label for="telepon" class="block text-gray-700 font-normal">telepon <span
                                    class="text-red-500"> *</span></label>
                            <input type="tel" name="telepon" id="telepon" placeholder=""
                                class="w-full p-2 border bg-slate-100 border-gray-300  mt-2 focus:outline-none focus:border-gray-500">
                        </div>


                        <!-- Pesan -->
                        <div>
                            <label for="message" class="block text-gray-700 font-medium">Message <span
                                    class="text-red-500"> *</span></label>
                            <textarea name="message" id="message" rows="4"
                                class="w-full p-2 border bg-slate-100 border-gray-300  mt-2 focus:outline-none focus:border-gray-500"></textarea>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="flex justify-end">
                            <button type="submit mx-auto"
                                class="w-full  md:w-auto px-6 py-2 mt-4 border border-primary text-primary font-medium  hover:bg-primary hover:text-white transition">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
{{-- contact end --}}

@endsection


