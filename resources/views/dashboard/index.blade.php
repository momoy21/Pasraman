<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CRUD Kegiatan Pasraman') }}
        </h2>
    </x-slot>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Kegiatan Pasraman</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Include Material Icons and Tailwind CSS from CDNs -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900">
    <a href="{{ route('dashboard.create') }}" class="flex items-center justify-center font-semibold">Create New Event</a>
    <div class="flex items-center justify-center  mt-20">
    <div class="">
        <div class="overflow-auto lg:overflow-visible ">
            <table class="table text-gray-400 border-separate space-y-6 text-sm bg-gray-800">
                <thead class="text-gray-500">
                    <tr>
                        <th class="p-3">Event</th>
                        <th class="p-3 text-left">Tanggal Event</th>
                        <th class="p-3 text-left">Deskripsi</th>
                        <th class="p-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>

                        @foreach($activity as $dashboard)
                        <tr class="bg-gray-800">
                            <td class="p-3">{{ $dashboard->event }}</td>
                            <td class="p-3">{{ $dashboard->tanggalevent }}</td>
                            <td class="p-3">{{ $dashboard->deskripsi }}</td>
                            <td class="p-3">
                                <a href="{{ route('dashboard.show', $dashboard->id) }}" class="text-gray-400 hover:text-gray-100 mr-2">
                                    <i class="material-icons-outlined text-base">visibility</i>
                                </a>
                                <a href="{{ route('dashboard.edit', $dashboard->id) }}" class="text-gray-400 hover:text-gray-100 mx-2">
                                    <i class="material-icons-outlined text-base">edit</i>
                                </a>
                                <form action="{{ route('dashboard.destroy', $dashboard->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="text-gray-400 hover:text-gray-100 ml-2">
                                        <i class="material-icons-round text-base">delete_outline</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
</x-app-layout>

