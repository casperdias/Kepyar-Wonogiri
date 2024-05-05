<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UMKMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexGuest()
    {
        $umkms = UMKM::all();
        return view('landingpage.umkm', compact('umkms'));
    }

    public function index()
    {
        $umkms = UMKM::all();
        return view('umkm.index', compact('umkms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('umkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Simpan UMKM request data nama_tempat, keterangan, no_wa
        $umkm = new UMKM;
        $umkm->nama_tempat = $request->nama_tempat;
        $umkm->keterangan = $request->keterangan;
        $umkm->keterangan = $request->harga;
        $umkm->no_wa = $request->no_wa;
        $umkm->thumbnail = $request->thumbnail->store('images', 'public');
        if ($request->hasFile('photo1')) {
            $umkm->photo1 = $request->photo1->store('images', 'public');
        }
        if ($request->hasFile('photo2')) {
            $umkm->photo2 = $request->photo2->store('images', 'public');
        }
        if ($request->hasFile('photo3')) {
            $umkm->photo3 = $request->photo3->store('images', 'public');
        }
        $umkm->save();
        return redirect()->route('umkm.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Menampilkan detail UMKM berdasarkan id
        $umkm = UMKM::find($id);
        return view('umkm.show', compact('umkm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $umkm = UMKM::find($id);
        return view('umkm.edit', compact('umkm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Update UMKM request data nama_tempat, keterangan, no WA, Thumbnail foto, dan 3 foto yang optional untuk diisi oleh user. simpan gambar di folder public/storage/images dengan nama unik
        $umkm = UMKM::find($id);
        $umkm->nama_tempat = $request->nama_tempat;
        $umkm->keterangan = $request->keterangan;
        $umkm->keterangan = $request->harga;
        $umkm->no_wa = $request->no_wa;
        // Check if a new thumbnail has been uploaded
        if ($request->hasFile('thumbnail')) {
            Storage::disk('public')->delete($umkm->thumbnail);
            $umkm->thumbnail = $request->thumbnail->store('images', 'public');
        }
        if ($request->hasFile('photo1')) {
            if ($umkm->photo1 !== null) {
                Storage::disk('public')->delete($umkm->photo1);
            }
            $umkm->photo1 = $request->photo1->store('images', 'public');
        }
        if ($request->hasFile('photo2')) {
            if ($umkm->photo2 !== null) {
                Storage::disk('public')->delete($umkm->photo2);
            }
            $umkm->photo2 = $request->photo2->store('images', 'public');
        }
        if ($request->hasFile('photo3')) {
            if ($umkm->photo3 !== null) {
                Storage::disk('public')->delete($umkm->photo3);
            }
            $umkm->photo3 = $request->photo3->store('images', 'public');
        }
        $umkm->save();
        return redirect()->route('umkm.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Hapus UMKM berdasarkan id
        $umkm = UMKM::find($id);
        //Delete image from storage
        Storage::disk('public')->delete($umkm->thumbnail);
        if ($umkm->photo1 !== null) {
            Storage::disk('public')->delete($umkm->photo1);
        }
        if ($umkm->photo2 !== null) {
            Storage::disk('public')->delete($umkm->photo2);
        }
        if ($umkm->photo3 !== null) {
            Storage::disk('public')->delete($umkm->photo3);
        }

        $umkm->delete();
        return redirect()->route('umkm.index');
    }
}
