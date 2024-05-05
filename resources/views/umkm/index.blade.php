<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buat Postingan UMKM') }}
        </h2>
    </x-slot>

    {{-- Display all UMKM Post with button see, edit, and destroy, if want to add new Post push button with route umkm.create --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Welcome to UMKM Post
                    </div>
                    <div class="mt-6 text-gray-500">
                        <p>Here you can see all UMKM Post, and you can add new Post by clicking the button below</p>
                    </div>
                    {{-- Add button with href umkm.create --}}
                    <div class="mt-6">
                        <a href="{{ route('umkm.create') }}"><x-primary-button>Tambah Post Baru</x-primary-button></a>
                    </div>
                </div>
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        UMKM Post
                    </div>
                    <div class="mt-6 text-gray-500">
                        <p>Here you can see all UMKM Post</p>
                    </div>
                    
                    <div class="mt-6 rounded-md border-solid border-2 border-stone-950">
                        <table class="table-auto w-full ">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-solid border-2 border-stone-950 py-3">Title</th>
                                    <th scope="col" class="border-solid border-2 border-stone-950 py-3">Description</th>
                                    <th scope="col" class="border-solid border-2 border-stone-950 py-3">WA</th>
                                    <th scope="col" class="border-solid border-2 border-stone-950 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($umkms as $umkm)
                                    <tr>
                                        <td class="text-center border-solid border-2 border-stone-950 p-3">{{ $umkm->nama_tempat }}</td>
                                        <td class="border-solid border-2 border-stone-950 p-3">{{ $umkm->keterangan }}</td>
                                        <td class="text-center border-solid border-2 border-stone-950 p-3">{{ $umkm->no_wa }}</td>
                                        <td class="text-center border-solid border-2 border-stone-950 p-3">
                                            <div>
                                                <a href="{{ route('guest.umkm.show', $umkm->id) }}"><x-primary-button><i class="fas fa-eye"></i></x-primary-button></a>
                                                <a href="{{ route('umkm.edit', $umkm->id) }}"><x-secondary-button><i class="fas fa-edit"></i></x-secondary-button></a>
                                                <form action="{{ route('umkm.destroy', $umkm->id) }}" method="post" style="display: inline-block;">
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
