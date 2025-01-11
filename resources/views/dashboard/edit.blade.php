<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Event') }}
        </h2>
    </x-slot>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1 class="font-bold text-3xl mt-8 text-center">Edit Kegiatan: {{$activity->event}}</h1>
    <!-- TAMBAHIN EDIT FOTO JANGAN LUPA -->
    <div style="display: flex; justify-content: center; padding: 20px;">
        <div style="width: 550px;">
            <form action="/dashboard/{{$activity->id}}" method="post">
                @method('PUT')
                @csrf
                <div class="mb-5">
                    <label for="event" class="mb-3 block text-base font-medium text-[#07074D]">
                        Event
                    </label>
                    <input type="text" name="event" id="event" placeholder="Name of Event"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{$activity->event}}">
                </div>
                <div class="mb-5">
                    <label for="deskripsi" class="mb-3 block text-base font-medium text-[#07074D]">
                        Deskripsi
                    </label>
                    <textarea rows="4" name="deskripsi" id="deskripsi" placeholder="Description of Event"
                        class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" oninput="updateCharacterCount()">{{$activity->deskripsi}}</textarea>
                    <p id="char-count" class="text-[#737373] text-sm mt-2">0 characters (max 375)</p>
                </div>
                <div class="mb-5">
                    <label for="tanggalevent" class="mb-3 block text-base font-medium text-[#07074D]">
                        Tanggal Event
                    </label>
                    <input type="date" name="tanggalevent" id="tanggalevent" placeholder="Date of Event"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{$activity->tanggalevent}}">
                </div>
                <div style="margin-bottom: 20px;">
                    <button type="submit" style="background-color: #6A64F1; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">
                        Submit
                    </button>
                    <a href="/dashboard" style="display: inline-block; background-color: #2E2E2E; color: white; padding: 10px; border: none; border-radius: 5px; text-decoration: none;">
                        Back
                    </a>
                </div>
            </form>
        </div>

        <script>
            function updateCharacterCount() {
                var textarea = document.getElementById("deskripsi");
                var charCount = textarea.value.length;
                var maxChars = 375;

                document.getElementById("char-count").textContent = charCount + " characters (max " + maxChars + ")";

                if (charCount > maxChars) {
                    textarea.style.borderColor = "#ff2851";
                    document.getElementById("char-count").style.color = "#ff2851";
                } else {
                    textarea.style.borderColor = "#b2b2b2";
                    document.getElementById("char-count").style.color = "#737373";
                }
            }
        </script>
</x-app-layout>
