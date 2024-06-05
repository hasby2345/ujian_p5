<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eskul = Eskul::latest()->get();
        return view('eskul.index', compact('eskul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $eskul = Eskul::all();
        return view('eskul.create', compact('eskul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'eskul'=>'required',
            'deskripsi'=>'required',
            'foto'=>'required|max:208|mimes:png,jpg'

        ]);

        $eskul = new Eskul();
        $eskul->eskul = $request->eskul;
        $eskul->deskripsi = $request->deskripsi;

        if($request->hasFile('foto')){
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/eskul/', $name);
            $eskul->foto = $name;
        }
            $eskul->save();
            return redirect()->route('eskul.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $eskul = Eskul::FindOrFail($id);
        return view('eskul.show', compact('eskul'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $eskul = Eskul::FindOrFail($id);
        return view('eskul.edit', compact('eskul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'eskul'=>'required',
            'deskripsi'=>'required',
            // 'foto'=>'required|max:204kb|mimes:png,jpg'

        ]);

        $eskul = Eskul::FindOrFail($id);
        $eskul->eskul = $request->eskul;
        $eskul->deskripsi = $request->deskripsi;

        if($request->hasFile('foto')){
            $eskul->deleteImage();
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/eskul/', $name);
            $eskul->foto = $name;
        }
            $eskul->save();
            return redirect()->route('eskul.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $eskul = Eskul::FindOrFail($id);
        $eskul->delete();
        // $siswa->genre()->detach();
        return redirect()->route('eskul.index')
            ->with('success', 'data berhasil dihapus');
    }
}
