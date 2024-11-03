{{-- header section --}}
<x-Navbar></x-Navbar>
{{-- header section end --}}

{{-- banner --}}
<section id="banner">
    <div class="w-full shadow-lg flex font-mono h-[700px] ">
        <div class="relative banner w-full h-full ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,130L720,0L1440,0L1440,0L720,0L0,0Z"></path>
            </svg>
            <img src="img/banner-service.jpg" alt=""
                class="relative -top-[280px] brightness-75 -z-10 w-full grayscale">
            <div class="absolute w-2/5 px-4 py-4 top-44 left-16">
                <h1
                    class="inline-block bg-white  rounded-tr-lg backdrop-blur-lg font-Rowdies font-bold text-[37px] uppercase  text-primary px-4">
                    sesuai dengan kebutuhan Anda </h1>

                <p class="font-medium text-md text-white backdrop-blur-sm p-2 rounded-md">HealthMate bertujuan
                    menyediakan fasilitas
                    kebugaran
                    terbaik dengan peralatan modern yang aman dan lingkungan yang selalu bersih, agar setiap
                    anggota merasa nyaman dalam mencapai tujuan kebugaran mereka.</p>

                <div
                    class=" w-[150px] border-2 border-primary rounded-sm
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
{{-- banner end --}}

{{-- service --}}
<x-service></x-service>
{{-- service end --}}

{{-- option --}}
<x-member-option></x-member-option>
{{-- option end --}}

{{-- footer start --}}
<x-Footer></x-Footer>
{{-- footer end --}}

