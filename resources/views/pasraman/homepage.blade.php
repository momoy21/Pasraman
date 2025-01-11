<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<title>Homepage</title>
    <body>

    @include('pasraman.navbar')

    <!---- HOME SELAMAT DATANG SECTION ---->

    <div class="relative min-h-screen flex items-center justify-center">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="img/homepage-img.png" alt="Background Image" style="opacity: 0.55" />
        </div>

        <div class="absolute inset-1 flex items-center justify-center text-center md:text-left">
            <div class="text-gray-800  md:mx-auto md:max-w-2xl">
                <div data-aos="zoom-in" data-aos-duration="3000">
                <p class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">
                    Selamat Datang <br />di Pasraman Dharma Sidhi Karya
                </p>
                <p class="text-base md:text-lg font-semibold md:mb-8">
                    Pasraman Dharma Sidhi Karya dibangun untuk saling berbagi informasi
                    dan menjalin komunikasi antar pemangku kepentingan seperti
                    pemerintah, masyarakat, pengelola, pengurus, pendidik dan siswa
                    pasraman di Pura Dharma Sidhi. Website ini menjadi wadah kolaboratif
                    dan komunikatif bagi pasraman di Dharma Sidhi dalam upaya membentuk
                    generasi Muda Hindu yang suputra, unggul, berakhlak mulia, berjiwa
                    Pancasila dan setia kepada NKRI.
                </p>
            </div>
        </div>
        </div>
    </div>


        <!---- HOME SELAMAT DATANG END ---->

        <!---- AKTIVITAS SECTION ---->
        <div class="relative">
        <img
            class="h-[240px] w-full object-cover opacity-60 shrink-1"
            src="img/rectangle-19.png"
            alt="Description of the image"
        />
        <p
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-3xl font-bold sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl"
            style="color: #682000"
        >
            Aktivitas Kami
        </p>
        </div>

        <!-- aktivitasnya -->
        <div class="relative min-h-screen flex items-center justify-center">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover" src="img/pura-img.png" alt="Background Image" style="opacity: 0.55" />
            </div>

            <div class="container mx-auto px-4">
                <div data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1500">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach ($recentActivities as $activity)
                    <div class="relative max-w-sm mx-4 rounded overflow-hidden hover:scale-90 lg:hover:scale-110 ease-in duration-500 shadow-lg bg-white bg-opacity-90">
                        <div class="aspect-[3/2]">
                            <img class="w-full h-full object-cover" src="{{ asset('storage/' . $activity->foto) }}" alt="Decorative Image" />
                        </div>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl text-gray-800 mb-2">
                                {{$activity->event}}
                            </div>
                            <p class="text-gray-700 text-base md:text-justify">
                                {{$activity->deskripsi}}
                            </p>
                        </div>
                        <div class="px-6 py-4 mt-3 italic font-semibold">
                            {{$activity->tanggalevent}}
                        </div>
                    </div>
                    @endforeach
                </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
        <!---- AKTIVITAS END ---->

        <!-- INFORMASI SECTION -->
        <div class="p-8 flex flex-col-reverse md:flex-row items-center justify-between">
            <!-- Content Container -->
            <div class="md:mr-auto text-gray-800 max-w-xl md:ml-auto">
                <!-- Title -->
                <div class="text-3xl md:text-4xl font-bold mb-4 md:mb-10">Program Pendidikan Kami</div>

                <!-- Description -->
                <p class="text-lg">
                    Pasraman Dharma Sidhi Karya, menyediakan berbagai program yang bisa dinikmati. Mulai dari pendidikan biasa, hingga kegiatan yoga yang dapat menyegarkan tubuh!
                </p>

                <!-- Action Link -->
                <div class="mt-4 md:mt-10">
                    <a class="px-4 py-2 bg-orange-900 text-white rounded hover:bg-gray-500 transition duration-300 font-semibold text-xl" href="{{ route('pasraman.program') }}">
                        Lihat
                    </a>
                </div>
            </div>
            <!-- Background Image -->
            <img class="w-full max-w-xl md:w-[400px]  md:ml-auto md:mr-auto mt-6 mb-4 rounded md:mt-0" src="img/pura-animasi.png" alt="Background" />
        </div>
        <!-- INFORMASI END -->

        @include('pasraman.footer')
        </div>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
    </html>
