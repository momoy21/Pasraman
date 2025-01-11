<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<title>Activity</title>
    <body>
        @include('pasraman.navbar')
        <!---- Introduction ---->

        <div class="relative">
            <img
            class="w-full h-[1000px] md:h-[700px] shrink-0"
            src="img/pura-img.png"
            alt="Background Image"
            style="opacity: 0.6"
            />
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-gray-800 text-center mr-3 ml-3 mb-auto mt-[200px]">
                <div data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1500">
                <p class="text-[3rem] font-bold mb-4">
                Aktivitas di Pasraman Dharma Sidhi Karya
                </p>
                <p class="text-lg text-center font-semibold">
                    Pasraman Dharma Sidhi Karya adalah tempat di mana pelajar didorong untuk melakukan berbagai kegiatan kreatif guna meningkatkan diri mereka sendiri. Selain itu, di pasraman ini juga terdapat komunitas Hindu lainnya yang juga aktif melaksanakan kegiatan di dalamnya. Ini mencerminkan suasana yang beragam dan dinamis di pasraman tersebut, di mana berbagai kegiatan dan komunitas dapat saling berinteraksi untuk memperkaya pengalaman spiritual dan budaya Hindu.
                </p>
                </div>
                </div>
            </div>
        </div>
        <!---- Introduction END ---->

        <!-- aktivitasnya -->
        <section
            class="min-h-screen flex flex-col justify-center p-2 pt-4 md:p-32 md:pt-34"
        >

        @foreach ($activity as $item)
        <div data-aos="zoom-in" data-aos-duration="2000">
            <article
            class="hover:scale-90 lg:hover:scale-110 ease-in duration-500 bg-gray-700 text-gray-200 flex flex-wrap md:flex-inherit rounded-lg shadow-xl relative overflow-hidden mb-8 flex-row bg-gradient-to-r from-yellow-700 to-orange-800"
            >
            <img
            class="relative w-full md:w-1/5 h-auto object-cover"
            src="{{ asset('storage/' . $item->foto) }}"
            alt="Image"
                />
                <div class="relative flex flex-col p-4 md:w-4/5">
                    <h1 class="text-3xl mb-2">{{$item->event}}</h1>
                    <div>
                        <time class="italic font-semibold">{{$item->tanggalevent}}</time>
                    </div>
                    <div class="text-justify mt-6">
                    {{$item->deskripsi}}
                    </div>
                </div>
            </article>
        </div>
        @endforeach


            <!--<article
            class="bg-gray-700 text-gray-200 flex flex-wrap md:flex-inherit rounded-lg shadow-xl relative overflow-hidden mb-8 flex-row bg-gradient-to-r from-yellow-700 to-orange-800"
            >
            <img
                class="relative w-full md:w-1/5 h-auto object-cover"
                src="img/aktivitas-3.png"
                alt="Image"
            />
            <div class="relative flex flex-col p-4 md:w-4/5">
                <h1 class="text-3xl mb-2">Big fish</h1>
                <div>
                <time class="italic font-semibold">10/10/2023</time>
                </div>
                <div class="text-justify mt-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam
                nisi soluta labore accusamus atque recusandae rerum quos ex non?
                Cumque debitis distinctio maxime, corrupti eius molestias voluptatem
                non nemo voluptate amet voluptas architecto assumenda tempora
                expedita, voluptatum quisquam enim aliquid blanditiis soluta sit!
                Modi, a laborum ducimus vero numquam autem.
                </div>
            </div>
            </article>

            <article
            class="bg-gray-700 text-gray-200 flex flex-wrap md:flex-inherit rounded-lg shadow-xl relative overflow-hidden mb-8 flex-row bg-gradient-to-r from-yellow-700 to-orange-800"
            >
            <img
                class="relative w-full md:w-1/5 h-auto object-cover"
                src="img/aktivitas-2.png"
                alt="Image"
            />
            <div class="relative flex flex-col p-4 md:w-4/5">
                <h1 class="text-3xl mb-2">Big fish</h1>
                <div>
                <time class="italic font-semibold">10/10/2023</time>
                </div>
                <div class="text-justify mt-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam
                nisi soluta labore accusamus atque recusandae rerum quos ex non?
                Cumque debitis distinctio maxime, corrupti eius molestias voluptatem
                non nemo voluptate amet voluptas architecto assumenda tempora
                expedita, voluptatum quisquam enim aliquid blanditiis soluta sit!
                Modi, a laborum ducimus vero numquam autem.
                </div>
            </div>
            </article>

            <article
            class="bg-gray-700 text-gray-200 flex flex-wrap md:flex-inherit rounded-lg shadow-xl relative overflow-hidden mb-8 flex-row bg-gradient-to-r from-yellow-700 to-orange-800"
            >
            <img
                class="relative w-full md:w-1/5 h-auto object-cover"
                src="img/aktivitas-2.png"
                alt="Image"
            />
            <div class="relative flex flex-col p-4 md:w-4/5">
                <h1 class="text-3xl mb-2">Big fish</h1>
                <div>
                <time class="italic font-semibold">10/10/2023</time>
                </div>
                <div class="text-justify mt-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam
                nisi soluta labore accusamus atque recusandae rerum quos ex non?
                Cumque debitis distinctio maxime, corrupti eius molestias voluptatem
                non nemo voluptate amet voluptas architecto assumenda tempora
                expedita, voluptatum quisquam enim aliquid blanditiis soluta sit!
                Modi, a laborum ducimus vero numquam autem.
                </div>
            </div>
            </article>-->
        </section>
        <!---- AKTIVITAS END ---->
        @include('pasraman.footer')
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
          </script>
    </body>
