<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buat Postingan UMKM') }}
        </h2>
    </x-slot>

    {{-- Form for create post with field Nama Tempat, Keterangan, No Wa, Thumbnail and 3 more photo --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('umkm.index') }} " enctype="multipart/form-data">
                        @csrf

                        <!-- Nama Tempat -->
                        <div>
                            <x-input-label for="nama_tempat" :value="__('Nama Tempat')" />

                            <x-text-input id="nama_tempat" class="block mt-1 w-full " type="text" name="nama_tempat"
                                :value="old('nama_tempat')" required autofocus />
                        </div>

                        <!-- Keterangan -->
                        <div class="mt-4">
                            <x-input-label for="keterangan" :value="__('Keterangan')" />

                            <x-text-input id="keterangan" class="block mt-1 w-full" type="text" name="keterangan"
                                :value="old('keterangan')" required />
                        </div>

                        {{-- Harga --}}
                        <div class="mt-4">
                            <x-input-label for="harga" :value="__('Harga')" />

                            <x-text-input id="harga" class="block mt-1 w-full" type="text" name="harga"
                                :value="old('harga')" required />
                        </div>

                        <!-- No Wa -->
                        <div class="mt-4">
                            <x-input-label for="no_wa" :value="__('No Wa')" />

                            <x-text-input id="no_wa" class="block mt-1 w-full" type="text" name="no_wa"
                                :value="old('no_wa')" required />
                        </div>

                        {{-- Thumbnail and preview --}}
                        <div class="mt-4">
                            <x-input-label for="thumbnail" :value="__('Thumbnail')" />

                            <x-file-input id="thumbnail" class="block mt-1 w-full" name="thumbnail"
                                :value="old('thumbnail')" required onchange="previewFile(this, 0)" />

                            <img id="preview0" class="mt-2" style="max-width: 200px" />
                        </div>

                        {{-- Photo 1, 2 , 3 and preview but not required --}}
                        @for ($i = 1; $i <= 3; $i++)
                            <div class="mt-4">
                                <x-input-label for="photo{{ $i }}" :value="__('Photo ' . $i)" />

                                <x-file-input id="photo{{ $i }}" class="block mt-1 w-full"
                                    name="photo{{ $i }}" :value="old('photo' . $i)"
                                    onchange="previewFile(this, {{ $i }})" />

                                <img id="preview{{ $i }}" class="mt-2" style="max-width: 200px" />
                            </div>
                        @endfor

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
