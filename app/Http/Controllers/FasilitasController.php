<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasilitas = Fasilitas::latest()->get();
        return view('fasilitas.index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fasilitas = Fasilitas::all();
        return view('fasilitas.create', compact('fasilitas'));
    }

    /**
         * Store a newly created resource in storage.
         */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_fasilitas'=>'required',
            'foto'=>'required|max:208|mimes:png,jpg',
        ]);

        $fasilitas = new Fasilitas();
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;

        if($request->hasFile('foto')){
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/fasilitas/', $name);
            $fasilitas->foto = $name;
        }
            $fasilitas->save();
            return redirect()->route('fasilitas.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $fasilitas = Fasilitas::FindOrFail($id);
        return view('fasilitas.show', compact('fasilitas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fasilitas = Fasilitas::FindOrFail($id);
        return view('fasilitas.edit', compact('fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_fasilitas'=>'required',
            // 'foto'=>'required|max:204kb|mimes:png,jpg
        ]);

        // $penulis = Penulis::FindOrFail($penulis->id);
        $fasilitas = Fasilitas::FindOrFail($id);
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;

        if($request->hasFile('foto')){
            $fasilitas->deleteImage();
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/fasilitas/', $name);
            $fasilitas->foto = $name;
        }
            $fasilitas->save();
            return redirect()->route('fasilitas.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fasilitas = Fasilitas::FindOrFail($id);
        $fasilitas->delete();
        // $siswa->genre()->detach();
        return redirect()->route('fasilitas.index')
            ->with('success', 'data berhasil dihapus');
    }
}
