<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class IndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $industri = Industri::latest()->get();
        return view('industri.index', compact('industri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('industri.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_industri'=>'required',
            'alamat'=>'required',
            'thn_kerja'=>'required',
            'id_jurusan'=>'required'
        ]);

        $industri = new Industri();
        $industri->nama_industri = $request->nama_industri;
        $industri->alamat = $request->alamat;
        $industri->thn_kerja = $request->thn_kerja;
        $industri->id_jurusan = $request->id_jurusan;

        $industri->save();
        //lampiran banyak genre di industri
        $industri->jurusan()->sync($request->jurusan);
        return redirect()->route('industri.index')
            ->with('success', 'data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $industri = Industri::FindOrFail($id);
        return view('industri.show', compact('industri'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $industri = Industri::FindOrFail($id);
        $jurusan = Jurusan::all();
        $selectJurusan = Jurusan::with('industri')->pluck('id')->toArray();
        return view('industri.edit', compact('industri', 'jurusan', 'selectJurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_industri'=>'required',
            'alamat'=>'required',
            'thn_kerja'=>'required',
            'id_jurusan'=>'required'

        ]);

        $industri = Industri::FindOrFail($id);
        $industri->nama_industri = $request->nama_industri;
        $industri->alamat = $request->alamat;
        $industri->thn_kerja = $request->thn_kerja;
        $industri->id_jurusan = $request->id_jurusan;

        $industri->save();
        //lampiran banyak genre di industri
        $industri->jurusan()->sync($request->jurusan);
        return redirect()->route('industri.index')
            ->with('success', 'data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $industri = Industri::FindOrFail($id);
        $industri->delete();
        $industri->jurusan()->detach();
        return redirect()->route('industri.index')
            ->with('success', 'data berhasil dihapus');
    }
}
