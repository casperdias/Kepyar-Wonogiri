<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buat Postingan Galeri') }}
        </h2>
    </x-slot>

    {{-- Form for create post with field Judul, Keterangan, No Wa, Thumbnail and 3 more photo --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('galeri.index') }} " enctype="multipart/form-data">
                        @csrf

                        <!-- Judul -->
                        <div>
                            <x-input-label for="judul" :value="__('Judul')" />

                            <x-text-input id="judul" class="block mt-1 w-full " type="text" name="judul"
                                :value="old('judul')" required autofocus />
                        </div>

                        <!-- Keterangan -->
                        <div class="mt-4">
                            <x-input-label for="body" :value="__('Isi')" />
                            @error('body')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <x-text-input id="body" class="block mt-1 w-full" type="hidden" name="body"
                                :value="old('body')" required />
                            <trix-editor input="body"></trix-editor>
                        </div>

                        {{-- Thumbnail and preview --}}
                        <div class="mt-4">
                            <x-input-label for="photo" :value="__('Photo')" />

                            <x-file-input id="photo" class="block mt-1 w-full" name="photo" :value="old('photo')"
                                required onchange="previewFile(this, 0)" />

                            <img id="preview0" class="mt-2" style="max-width: 200px" />
                        </div>

                        <!-- Button Posting -->
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Posting') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Add preview photo JS --}}
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
