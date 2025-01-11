<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- BARU DIUBAH -->
    <section class="flex justify-center mt-8 mb-12">
        <a
        class="mt-4 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-lg font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800"
        href="{{ route('dashboard.create') }}"
        >
            <span class="text-center relative px-5 py-4 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            Create New Event
            </span>
        </a>
    </section>

    <h1 class="text-center mb-4 text-xl font-bold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-4xl dark:text-white">List of <mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">Events</mark></h1>
    @if ($activity->isEmpty())
        <div class="flex flex-col items-center justify-center text-center mt-20">
            <p class="text-gray-800 text-xl font-semibold text-center mb-2">Belum ada aktivitas terbaru,</p>
            <p class="text-gray-800 text-xl font-semibold text-center">Ayo unggah aktivitas terbaru di pasraman!</p>
            <img src="img/loading.gif" class="w-72" alt="Loading Animation">
        </div>
    @else
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($activity as $dashboard)
            <div class="relative max-w-sm mx-4 mb-8 rounded overflow-hidden shadow-lg bg-white bg-opacity-80">
                <div class="aspect-[3/2]">
                    <img class="w-full h-full object-cover" src="{{ asset('storage/' . $dashboard->foto) }}" alt="Decorative Image"/>
                </div>
                <div class="px-6 py-4">
                    <div class="font-bold text-xl text-gray-800 mb-2">
                        {{ $dashboard->event }}
                    </div>
                    <p class="text-gray-700 text-base md:text-justify">
                        {{ $dashboard->deskripsi }}
                    </p>
                    <p class="mt-3 italic font-semibold">{{ $dashboard->tanggalevent }}</p>
                    <div class="mt-2 flex justify-between">
                        <form action="{{ route('dashboard.destroy', $dashboard->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="text-lg text-gray-400 hover:text-red-500 mr-2">
                                <i class="material-icons-round text-lg">delete_outline</i>
                            </button>
                        </form>
                        <a href="{{ route('dashboard.edit', $dashboard->id) }}" class="text-gray-400 hover:text-green-400 mx-2">
                            <i class="material-icons-outlined text-lg">edit</i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</x-app-layout>
