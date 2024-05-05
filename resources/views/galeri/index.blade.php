<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buat Postingan Galeri') }}
        </h2>
    </x-slot>

    {{-- Display all Galeri Post with button see, edit, and destroy, if want to add new Post push button with route umkm.create --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Welcome to Galeri
                    </div>
                    <div class="mt-6 text-gray-500">
                        <p>Here you can see all Galeri, and you can add new Galeri by clicking the button below</p>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('galeri.create') }}"><x-primary-button>Tambah Post Baru</x-primary-button></a>
                    </div>
                </div>
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Galeri Post
                    </div>
                    <div class="mt-6 text-gray-500">
                        <p>Here you can see all Galeri Post</p>
                    </div>
                    
                    <div class="mt-6 rounded-md border-solid border-2 border-stone-950">
                        <table class="table-auto w-full ">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-solid border-2 border-stone-950 py-3">Title</th>
                                    <th scope="col" class="border-solid border-2 border-stone-950 py-3">Deskripsi</th>
                                    <th scope="col" class="border-solid border-2 border-stone-950 py-3">Foto</th>
                                    <th scope="col" class="border-solid border-2 border-stone-950 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galeris as $galeri)
                                    <tr>
                                        <td class="text-center border-solid border-2 border-stone-950 p-3">{{ $galeri->judul }}</td>
                                        <td class="border-solid border-2 border-stone-950 p-3">{{ strip_tags(limit_words($galeri->body, 30)) }}</td>
                                        {{-- Display photo --}}
                                        <td class="border-solid border-2 border-stone-950 p-3">
                                            <img class="w-48 h-24 object-cover object-center" src="{{ asset('storage/' . $galeri->photo) }}" alt="{{ $galeri->judul }}">
                                        </td>
                                        <td class="text-center border-solid border-2 border-stone-950 p-3">
                                            <div>
                                                <a href="{{ route('guest.galeri.show', $galeri->short) }}"><x-primary-button><i class="fas fa-eye"></i></x-primary-button></a>
                                                <a href="{{ route('galeri.edit', $galeri->id) }}"><x-secondary-button><i class="fas fa-edit"></i></x-secondary-button></a>
                                                <form action="{{ route('galeri.destroy', $galeri->id) }}" method="post" style="display: inline-block;">
                                                    @csrf
                                                    @method('delete')
                                                    <x-danger-button type="submit"><i class="fas fa-trash"></i></x-danger-button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
