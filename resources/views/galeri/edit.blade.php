<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Postingan Galeri') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('galeri.update', $galeri) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <!-- Judul -->
                        <div>
                            <x-input-label for="judul" :value="__('Judul')" />

                            <x-text-input id="judul" class="block mt-1 w-full" type="text" name="judul"
                                :value="$galeri->judul" required autofocus />
                        </div>

                        <!-- body -->
                        <div class="mt-4">
                            <x-input-label for="body" :value="__('Isi')" />
                            @error('body')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <x-text-input id="body" class="block mt-1 w-full" type="hidden" name="body"
                                :value="$galeri->body" required />
                            <trix-editor input="body" :value="$galeri - > body" required></trix-editor>
                        </div>

                        {{-- Photo and preview --}}
                        <div class="mt-4">
                            <x-input-label for="photo" :value="__('Photo')" />

                            <x-file-input id="photo" class="block mt-1 w-full" name="photo" :value="$galeri->photo"
                                onchange="previewFile(this, 0)" />

                            <img id="preview0" class="mt-2" style="max-width: 200px"
                                src="{{ asset('storage/' . $galeri->photo) }}" />
                        </div>

                        <!-- Button Posting -->
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewFile(input, id) {
            var file = input.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    $("#preview" + id).attr("src", reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>

</x-app-layout>
