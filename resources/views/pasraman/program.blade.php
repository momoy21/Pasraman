<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<title>Program</title>
<body>
@include('pasraman.navbar')
<div class="relative flex items-center justify-center min-h-screen">
    <img
        class="absolute inset-0 w-full h-full min-h-screen object-cover"
        src="img/program-img.png"
        alt="Background Image"
        style="opacity: 0.6"
    />
    <div class="relative text-center text-gray-800">
        <div data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1500">
        <div class="text-start mx-auto max-w-[800px] p-4">
        <p class="text-[3rem] font-bold mb-6">
            Program di Pasraman Dharma Sidhi Karya
        </p>
        <p class="text-2xl font-semibold text-justify">
            Pasraman Dharma Sidhi Karya menawarkan program pendidikan dan
            ekstrakurikuler yang beragam bagi semua pelajar. Tidak hanya itu,
            pasraman ini juga menyelenggarakan kegiatan yoga untuk meningkatkan
            kesehatan tubuh para pelajar!
        </p>
        </div>
        </div>
    </div>
    </div>
    <!---- Introduction END ---->
    <div style="background-color: #682c0e24; overflow: hidden">
    <!-- CARD PROGRAM-->
    <p class="text-4xl font-bold text-center mt-16">PROGRAM KAMI</p>
    <section class="text-gray-700 body-font mb-16">
        <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4 text-center">
            <a href="#sd" class="p-4 md:w-1/4 sm:w-1/2 w-full">
            <div
                class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110"
            >
                <img
                src="img/SD.png"
                class="w-12 h-12 mb-3 inline-block"
                alt=""
                />
                <p class="leading-relaxed">Sekolah Dasar</p>
            </div>
            </a>
            <a href="#smp" class="p-4 md:w-1/4 sm:w-1/2 w-full">
            <div
                class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110"
            >
                <img
                src="img/SMP.png"
                class="w-12 h-12 mb-3 inline-block"
                alt=""
                />
                <p class="leading-relaxed">Sekolah Menengah Pertama</p>
            </div>
            </a>
            <a href="#sma" class="p-4 md:w-1/4 sm:w-1/2 w-full">
            <div
                class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110"
            >
                <img
                src="img/SMA.png"
                class="w-12 h-12 mb-3 inline-block"
                alt=""
                />
                <p class="leading-relaxed">Sekolah Menengah Atas</p>
            </div>
            </a>

            <a href="#ekskul" class="p-4 md:w-1/4 sm:w-1/2 w-full">
            <div
                class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110"
                style="background-color: #68380082"
            >
                <img
                src="img/ekstrakurikuler.png"
                class="w-12 h-12 mb-3 inline-block"
                alt=""
                />
                <p class="leading-relaxed">Ekstrakurikuler & Yoga</p>
            </div>
            </a>
        </div>
        </div>
    </section>
    <!--END CARD PROGRAM-->

    <!--Konten-->

    <div class="text-4xl font-bold text-center mb-16" id="sd">PENDIDIKAN</div>
    <div data-aos="fade-left" data-aos-duration="2000">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-1 items-center mb-8">
        <!-- Card on the left side -->
        <div class="bg-white rounded shadow max-w-md mx-auto">
        <section>
            <img src="img/wsd.jpeg" class="w-full" />
            <p id="smp" class="text-xl font-bold text-gray-600 p-4">
            Sekolah Dasar
            </p>
        </section>
        </div>

        <!-- Text on the right side -->
        <p class="lg:ml-4 lg:mx-[200px] mx-8 my-16 text-justify">
            Pasraman Dharma Sidhi Karya menyediakan Sekolah Dasar dari kelas 1 sampai 6.
            Kelas-kelas di SD Pasraman juga sudah dilengkapi dengan fasilitas-fasilitas mulai dari bangku yang nyaman,
            AC setiap kelas, dan lainnya.
        </p>
    </div>

    <div data-aos="fade-left" data-aos-duration="2000">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-1 items-center mb-8">
        <!-- Card on the left side -->
        <div class="bg-white rounded shadow max-w-md mx-auto">
        <section>
            <img src="img/wsmp.jpeg" class="w-full" />
            <p id="sma" class="text-xl font-bold text-gray-600 p-4">
            Sekolah Menengah Pertama
            </p>
        </section>
        </div>

        <!-- Text on the right side -->
        <p class="lg:ml-4 lg:mx-[200px] mx-8 my-16 text-justify">
            Pasraman Sidhi Karya menyediakan pendidikan berkualitas untuk jenjang Sekolah Menengah Pertama mulai dari kelas 7 hingga kelas 9.
            Fasilitas yang kami tawarkan sangat mendukung proses pembelajaran, dengan ruang kelas yang dilengkapi bangku yang nyaman, AC di setiap kelas,
            serta berbagai fasilitas lainnya.
        </p>
    </div>

    <div data-aos="fade-left" data-aos-duration="2000">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-1 items-center mb-32">
        <!-- Card on the left side -->
        <div class="bg-white rounded shadow max-w-md mx-auto">
        <section>
            <img src="img/wsma.jpeg" class="w-full" />
            <p class="text-xl font-bold text-gray-600 p-4">
            Sekolah Menegah Atas
            </p>
        </section>
        </div>

        <!-- Text on the right side -->
        <p class="lg:ml-4 lg:mx-[200px] mx-8 my-16 text-justify">
            Pasraman Dharma Sidhi Karya juga menyediakan pendidikan tingkat Sekolah Menengah Atas dengan program yang komprehensif dari kelas 10 sampai kelas 12.
            Fasilitas yang disediakan di sini sangat mendukung proses belajar-mengajar, termasuk ruang kelas yang dilengkapi dengan kursi yang nyaman, AC di setiap ruangan, dan berbagai fasilitas lainnya.
        </p>
    </div>
    </div>

    <!--EKSKUL-->
    <div class="md:text-4xl text-3xl font-bold text-center mb-16" id="ekskul">
        EKSTRAKURIKULER
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-1 mb-32">
        <!-- First pair: Dharma Gita -->
        <div class="bg-white rounded shadow max-w-md mx-auto">
        <section class="text-center">
            <img
            src="img/wgita.jpeg"
            class="w-full h-4/5"
            style="max-width: 420px"
            />
            <p class="text-xl font-bold text-gray-600 p-4">Dharma Gita</p>
        </section>
        </div>
        <div class="bg-white rounded shadow max-w-base mx-auto">
        <section class="text-center">
            <img
            src="img/dharma-wacana.png"
            class="w-full h-4/5"
            style="max-width: 420px"
            />
            <p class="text-xl font-bold text-gray-600 p-4">Dharma Wacana</p>
        </section>
        </div>

        <!-- Third pair: Gamelan (Megamel) -->
        <div class="bg-white rounded shadow max-w-md mx-auto">
        <section class="text-center">
            <img
            src="img/wgamelan.jpeg"
            class="w-full h-4/5"
            style="max-width: 420px"
            />
            <p class="text-xl font-bold text-gray-600 p-4">Gamelan (Megamel)</p>
        </section>
        </div>
    </div>

    <!-- Text on the right side -->
    <p class="md:mx-[200px] mx-8 my-16 text-justify items-center">
        Pasraman Dharma Sidhi Karya tidak hanya menawarkan program akademis, tetapi juga memperluas pengalaman siswa melalui berbagai kegiatan ekstrakurikuler yang dapat diikuti oleh seluruh siswa yang mendaftar. Beberapa ekstrakurikuler yang tersedia di antaranya adalah Dharma Gita, Dharma Wacana, dan Kelompok Gamelan. Keberagaman ini memberikan siswa peluang untuk mengembangkan minat dan bakat mereka di luar lingkup pembelajaran klasikal, serta memperkaya pengalaman mereka di lingkungan pasraman.
    </p>

    <!--YOGA-->
    <div class="text-4xl font-bold text-center mb-8" id="yoga">YOGA</div>
    <div
        class="grid grid-cols-1 md:grid-cols-2 gap-1 items-center mb-[100px]"
    >
        <!-- Text on the left side -->
        <p
        class="lg:mr-4 lg:mx-[200px] mx-8 my-16 text-justify order-2 md:order-1"
        >
        Pasraman Dharma Sidhi Karya memberikan kesempatan bagi seluruh siswa untuk berpartisipasi dalam kegiatan Yoga. Kegiatan ini dirancang untuk memberikan manfaat kesehatan fisik dan mental, serta memperkaya pengalaman spiritual siswa. Melalui program Yoga ini, siswa dapat mengembangkan kebugaran, keseimbangan, dan kesadaran diri, menciptakan lingkungan yang mendukung pertumbuhan holistik mereka di dalam dan di luar kelas.
        </p>

        <!-- Card on the right side -->
        <div
        class="bg-white rounded shadow-xl max-w-md mx-auto order-1 md:order-2"
        >
        <section>
            <img src="img/wyoga.jpeg" class="w-full rounded-lg" />
        </section>
        </div>
    </div>
    </div>
    <!--END Konten-->
@include('pasraman.footer')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
</body>
