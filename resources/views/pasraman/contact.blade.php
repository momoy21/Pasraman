<title>Contact Us</title>

<body>
@include('pasraman.navbar')

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const inputElements = document.querySelectorAll("input:not([name='_token']), textarea");

        inputElements.forEach((inputElement) => {
            inputElement.addEventListener("input", function () {
                toggleLabelVisibility(this);
            });

            toggleLabelVisibility(inputElement);
        });
    });

    function toggleLabelVisibility(inputElement) {
        // Exclude the hidden CSRF token input
        if (inputElement.name !== '_token') {
            const labelElement = document.querySelector(`[for="${inputElement.id}"]`);

            if (inputElement.value.trim() !== '') {
                labelElement.classList.add('hidden');
            } else {
                labelElement.classList.remove('hidden');
            }
        }
    }
    </script>


<!---- Title ---->
<div class="relative">
<img
    class="h-[240px] w-full object-cover opacity-60 shrink-1"
    src="img/wguru.jpeg"
    alt="Description of the image"
/>
<p
    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-2xl font-bold sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl"
>
    Hubungi Kami!
</p>

</div>
<!---- Title ---->

<!---- contact---->
<div class="relative min-h-screen">
<div class="absolute inset-0">
    <img
    class="w-full h-full object-cover"
    src="img/pura-img.png"
    alt="Background Image"
    style="opacity: 0.55"
    />
</div>
<!-- Contact Us -->
<!-- BARU DIUBAH -->
<div class="container my-auto mx-auto md:px-6">
    <section class="text-center">
        <div class="py-12 md:px-12">
        <div class="container mx-auto xl:px-32">
            <div class="grid items-center lg:grid-cols-2">
            <div class="mb-12 md:mt-12 lg:mt-0 lg:mb-0">
                <div
                class="relative z-[1] block rounded-lg bg-[hsla(0,0%,100%,0.55)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] backdrop-blur-[30px] dark:bg-[hsla(0,0%,5%,0.7)] dark:shadow-black/20 md:px-12 lg:-mr-14"
                >
                <h2 class="mb-12 text-3xl font-bold">Silahkan isi form di bawah</h2>
                @if (Session::has('msg'))
                <p class="alert alert-success">{{ Session::get('msg') }}</p>
                @endif
                <form name="contact_form" action="/post-message" method="post">
                    @csrf
                    <div class="relative mb-8" data-te-input-wrapper-init>
                    <input
                        type="text"
                        name="name"
                        class="peer block min-h-[auto] w-full rounded border-0 py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="formName"
                        placeholder="Name"
                    />
                    <label
                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.7rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                        for="formName"
                        >Name
                    </label>
                    </div>
                    <div class="relative mb-8" data-te-input-wrapper-init>
                    <input
                        type="email"
                        name="email"
                        class="peer block min-h-[auto] w-full rounded border-0 py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="formEmail"
                        placeholder="Email address"
                    />
                    <label
                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.7rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                        for="formEmail"
                        >Email address
                    </label>
                    </div>
                    <div class="relative mb-8" data-te-input-wrapper-init>
                    <input
                        type="subject"
                        name="subject"
                        class="peer block min-h-[auto] w-full rounded border-0 py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="formSubject"
                        placeholder="Subject"
                    />
                    <label
                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.7rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                        for="formSubject"
                        >Subject
                    </label>
                    </div>
                    <div class="relative mb-8" data-te-input-wrapper-init>
                    <textarea
                        class="peer block min-h-[auto] w-full rounded border-0 py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        name="message"
                        id="formMessage"
                        rows="3"
                        placeholder="Your message"
                    ></textarea>
                    <label
                        for="formMessage"
                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.7rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                        >Message</label
                    >
                    </div>
                    <div
                    class="mb-8 inline-block min-h-[1.5rem] justify-center pl-[1.5rem] md:flex"
                    ></div>
                    <button
                    type="submit"
                    data-te-ripple-init
                    data-te-ripple-color="light"
                    class="inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-md font-medium uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0"
                    >
                    Send
                    </button>
                </form>
                </div>
            </div>
            <div class="md:mb-12 lg:mb-0">
                <div
                class="relative h-[700px] rounded-lg shadow-lg dark:shadow-black/20"
                >
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.111687758583!2d106.69718647586843!3d-6.2490108611883555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa68ffffffff%3A0xd6ae04b76ceeb49a!2sPura%20Dharma%20Sidhi!5e0!3m2!1sid!2sid!4v1700304544056!5m2!1sid!2sid"
                    class="absolute left-0 top-0 h-full w-full rounded-lg"
                    frameborder="0"
                    allowfullscreen
                ></iframe>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</div>
</div>
<!-- end contact us -->

@include('pasraman.footer')
</body>
