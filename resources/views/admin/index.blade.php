<title>admin dashboard</title>
@extends('admin-layout')

@section('content')
    <div class="w-4/5 px-6 py-4 absolute top-40 ml-64">
        <div class="flex flex-wrap">
            <div class="mb-6 p-2 w-1/3 relative ">
                <!-- Link wrapping the entire image with text overlay -->
                <div class="block w-full h-full bg-slate-200 rounded-md shadow-md overflow-hidden mx-auto group relative">
                    <!-- Image with grayscale effect and hover to color -->
                    <div class="flex w-full">
                        <h1 class="text-4xl mx-auto text-primary capitalize font-Rowdies px-6 py-6">member</h1>
                    </div>

                    <div class="flex w-full">
                        <h1 class="text-3xl mx-auto capitalize font-Rowdies py-6">{{ $count_m }}</h1>
                    </div>

                </div>
            </div>
            <div class="mb-6 p-2 w-1/3 relative ">
                <!-- Link wrapping the entire image with text overlay -->
                <div class="block w-full h-full bg-slate-200 rounded-md shadow-md overflow-hidden mx-auto group relative">
                    <!-- Image with grayscale effect and hover to color -->
                    <div class="flex w-full">
                        <h1 class="text-4xl mx-auto text-primary capitalize font-Rowdies px-6 py-6">pelatih</h1>
                    </div>

                    <div class="flex w-full">
                        <h1 class="text-3xl mx-auto capitalize font-Rowdies py-6">{{ $count_p }}</h1>
                    </div>

                </div>
            </div>
            <div class="mb-6 p-2 w-1/3 relative ">
                <!-- Link wrapping the entire image with text overlay -->
                <div class="block w-full h-full bg-slate-200 rounded-md shadow-md overflow-hidden mx-auto group relative">
                    <!-- Image with grayscale effect and hover to color -->
                    <div class="flex w-full">
                        <h1 class="text-4xl mx-auto text-primary capitalize font-Rowdies px-6 py-6">kelas</h1>
                    </div>

                    <div class="flex w-full">
                        <h1 class="text-3xl mx-auto capitalize font-Rowdies py-6">{{ $count_p }}</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
