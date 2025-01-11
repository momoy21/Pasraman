<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#000000" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600%2C700"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inria+Serif%3A700"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display%3A400%2C500%2C600%2C700"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Island+Moments%3A400"/>
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <script>
            {{ asset('script.js') }}
        </script>
    </head>

    <!--NAVBAR YANG PALING BENER-->
    <nav style="background-color: #68380082" class="p-5 shadow md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center">
        <a href="{{ route('pasraman.homepage') }}">
            <img class="h-10 inline mr-3"
            src="img/logo.png">
        </a>
        <span class="text-title lg:text-xl font-[Poppins] cursor-pointer">
            Pasraman Dharma Sidhi Karya
        </span>

        <span class="text-3xl cursor-pointer mx-2 md:hidden block">
            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
        </div>

        <ul class="nav md:bg-transparent md:flex md:items-center z-[1] md:z-auto md:static absolute w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0"  style="text-decoration-color: #682000">
                <a href="{{ route('pasraman.homepage') }}" class="text-black hover:underline px-auto py-auto text-lg font-medium {{ request()->routeIs('pasraman.homepage') ? 'underline' : '' }}">
                    HOME
                </a>
            </li>
            <li class="mx-4 my-6 md:my-0"  style="text-decoration-color: #682000">
                <a href="{{ route('pasraman.history') }}" class="hover:underline px-auto py-auto text-lg font-medium {{ request()->routeIs('pasraman.history') ? 'underline' : '' }}">
                    HISTORY
                </a>
            </li>
            <li class="mx-4 my-6 md:my-0"  style="text-decoration-color: #682000">
                <a href="{{ route('pasraman.activity') }}" class="text-black hover:underline px-auto py-auto text-lg font-medium {{ request()->routeIs('pasraman.activity') ? 'underline' : '' }}">
                    ACTIVITY
                </a>
            </li>
            <li class="mx-4 my-6 md:my-0"  style="text-decoration-color: #682000">
                <a href="{{ route('pasraman.program') }}" class="text-black  hover:underline px-auto py-auto text-lg font-medium {{ request()->routeIs('pasraman.program') ? 'underline' : '' }}"
                >PROGRAM
                </a>
            </li>
            <li class="mx-4 my-6 md:my-0"  style="text-decoration-color: #682000">
                <a href="{{ route('pasraman.contact') }}" class="text-black  hover:underline px-auto py-auto text-lg font-medium {{ request()->routeIs('pasraman.contact') ? 'underline' : '' }}"
                    >CONTACT
                </a>
            </li>
        </ul>
    </nav>

    <script>
        function Menu(e) {
            let list = document.querySelector("ul");
            e.name === "menu"
            ? ((e.name = "close"),
                list.classList.add("top-[80px]"),
                list.classList.add("opacity-100"))
            : ((e.name = "menu"),
                list.classList.remove("top-[80px]"),
                list.classList.remove("opacity-100"));
        }
    </script>
