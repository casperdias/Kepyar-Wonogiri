<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Postingan UMKM') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('umkm.update', $umkm) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <!-- Nama Tempat -->
                        <div>
                            <x-input-label for="nama_tempat" :value="__('Nama Tempat')" />

                            <x-text-input id="nama_tempat" class="block mt-1 w-full" type="text" name="nama_tempat"
                                :value="$umkm->nama_tempat" required autofocus />
                        </div>

                        <!-- Keterangan -->
                        <div class="mt-4">
                            <x-input-label for="keterangan" :value="__('Keterangan')" />

                            <x-text-input id="keterangan" class="block mt-1 w-full" type="text" name="keterangan"
                                :value="$umkm->keterangan" required />
                        </div>

                        {{-- Harga --}}
                        <div class="mt-4">
                            <x-input-label for="harga" :value="__('Harga')" />

                            <x-text-input id="harga" class="block mt-1 w-full" type="text" name="harga"
                                :value="$umkm->harga" required />
                        </div>

                        <!-- No Wa -->
                        <div class="mt-4">
                            <x-input-label for="no_wa" :value="__('No Wa')" />

                            <x-text-input id="no_wa" class="block mt-1 w-full" type="text" name="no_wa"
                                :value="$umkm->no_wa" required />
                        </div>

                        {{-- Thumbnail and preview --}}
                        <div class="mt-4">
                            <x-input-label for="thumbnail" :value="__('Thumbnail')" />

                            <x-file-input id="thumbnail" class="block mt-1 w-full" name="thumbnail" :value="$umkm->thumbnail"
                                onchange="previewFile(this, 0)" />

                            <img id="preview0" class="mt-2" style="max-width: 200px"
                                src="{{ asset('storage/' . $umkm->thumbnail) }}" />
                        </div>

                        {{-- Photo 1, 2 , 3 and preview but not required --}}
                        @for ($i = 1; $i <= 3; $i++)
                            <div class="mt-4">
                                <x-input-label for="photo{{ $i }}" :value="__('Photo ' . $i)" />

                                <x-file-input id="photo{{ $i }}" class="block mt-1 w-full"
                                    name="photo{{ $i }}" :value="$umkm->{'photo' . $i}"
                                    onchange="previewFile(this, {{ $i }})" />

                                @if ($umkm->{'photo' . $i} !== null)
                                    <img id="preview{{ $i }}" class="mt-2" style="max-width: 200px"
                                        src="{{ asset('storage/' . $umkm->{'photo' . $i}) }}" />
                                @endif
                            </div>
                        @endfor

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
