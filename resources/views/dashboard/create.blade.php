<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Event') }}
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



    <div style="display: flex; justify-content: center; padding: 20px;">
        <div style="width: 550px;">
            <form action="{{ route('dashboard.index') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="event" class="mb-3 block text-base font-medium text-[#07074D]">
                        Event
                    </label>
                    <input type="text" name="event" id="event" placeholder="Name of Event"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                </div>
                <div class="mb-5">
                    <label for="deskripsi" class="mb-3 block text-base font-medium text-[#07074D]">
                        Deskripsi
                    </label>
                    <textarea rows="4" name="deskripsi" id="deskripsi" placeholder="Description of Event"
                        class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" oninput="updateCharacterCount()"></textarea>
                    <p id="char-count" class="text-[#737373] text-sm mt-2">0 characters (max 375)</p>
                </div>
                <div class="mb-5">
                    <label for="tanggalevent" name="tanggalevent" class="mb-3 block text-base font-medium text-[#07074D]">
                        Tanggal Event
                    </label>
                    <input type="date" name="tanggalevent" id="tanggalevent" placeholder="Date of Event"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                </div>
                <div class="mb-5">
                    <label for="foto" class="mb-3 block text-base font-medium text-[#07074D]">
                        Foto Event
                    </label>
                    <input type="file" name="foto" id="foto" placeholder="Upload Photo"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                </div>
                <div style="margin-bottom: 20px;">
                    <button type="submit" style="color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;" class="bg-[#6A64F1] hover:bg-gray-500">
                        Submit
                    </button>
                    <a href="/dashboard" style="display: inline-block; color: white; padding: 10px; border: none; border-radius: 5px; text-decoration: none;" class="bg-[#2E2E2E] hover:bg-gray-500">
                        Back
                    </a>
                </div>
            </form>
        </div>
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
