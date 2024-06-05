<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::latest()->get();
        return view('jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jurusan'=>'required',
            'deskripsi'=>'required',
            'foto'=>'required|max:2080|mimes:png,jpg'

        ]);

        $jurusan = new Jurusan();
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->deskripsi = $request->deskripsi;

        if($request->hasFile('foto')){
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/jurusan/', $name);
            $jurusan->foto = $name;
        }

        $jurusan->save();

        return redirect()->route('jurusan.index')
            ->with('succes', 'data berhasil ditambahlan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jurusan = Jurusan::FindOrFail($id);
        return view('jurusan.show', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jurusan = Jurusan::FindOrFail($id);
        return view('jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_jurusan'=>'required',
            'deskripsi'=>'required',
            // 'foto'=>'required|max:208|mimes:png,jpg'
        ]);

        // $penulis = Penulis::FindOrFail($penulis->id);
        $jurusan = Jurusan::FindOrFail($id);
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->deskripsi = $request->deskripsi;

        if($request->hasFile('foto')){
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/jurusan/', $name);
            $jurusan->foto = $name;
        }

            $jurusan->save();
            return redirect()->route('jurusan.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::FindOrFail($id);
        $jurusan->delete();
        // $jurusan->genre()->detach();
        return redirect()->route('jurusan.index')
            ->with('success', 'data berhasil dihapus');
    }
}
