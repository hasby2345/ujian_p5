<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::latest()->get();
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artikel = Artikel::all();
        return view('artikel.create', compact('artikel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'tgl'=>'required',
            'foto'=>'required|max:208|mimes:png,jpg',
        ]);

        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->tgl = $request->tgl;

        if($request->hasFile('foto')){
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/artikel/', $name);
            $artikel->foto = $name;
        }
            $artikel->save();
            return redirect()->route('artikel.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $artikel = Artikel::FindOrFail($id);
        return view('artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $artikel = Artikel::FindOrFail($id);
        return view('artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'tgl'=>'required'
            // 'foto'=>'required|max:204kb|mimes:png,jpg
        ]);

        $artikel = Artikel::FindOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->tgl = $request->tgl;

        if($request->hasFile('foto')){
            $artikel->deleteImage();
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/artikel/', $name);
            $artikel->foto = $name;
        }
            $artikel->save();
            return redirect()->route('artikel.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $artikel = Artikel::FindOrFail($id);
        $artikel->delete();
        // $siswa->genre()->detach();
        return redirect()->route('artikel.index')
            ->with('success', 'data berhasil dihapus');
    }
}
