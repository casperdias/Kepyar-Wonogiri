<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexGuest()
    {
        $galeris = Photo::all();
        return view('landingpage.galeri', compact('galeris'));
    }

    public function index()
    {
        $galeris = Photo::all();
        return view('galeri.index', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $galeri = new Photo;
        $galeri->judul = $request->judul;
        $galeri->body = $request->body;
        $galeri->photo = $request->photo->store('images', 'public');
        // Convert judul to lowercase and replace spaces with -
        $galeri->short = strtolower(str_replace(' ', '-', $request->judul));
        $galeri->save();
        return redirect()->route('galeri.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        $galeri = Photo::find($name);
        return view('galeri.show', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $galeri = Photo::find($id);
        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $galeri = Photo::find($id);
        $galeri->judul = $request->judul;
        $galeri->body = $request->body;
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($galeri->photo);
            $galeri->photo = $request->thumbnail->store('images', 'public');
        }
        // Convert judul to lowercase and replace spaces with -
        $galeri->short = strtolower(str_replace(' ', '-', $request->judul));
        $galeri->save();
        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galeri = Photo::find($id);
        //Delete image from storage
        Storage::disk('public')->delete($galeri->photo);
        $galeri->delete();
        return redirect()->route('galeri.index');
    }
}
