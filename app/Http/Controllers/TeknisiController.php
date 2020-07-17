<?php

namespace App\Http\Controllers;

use App\Teknisi;
use Illuminate\Http\Request;

class TeknisiController extends Controller
{
    public function index()
    {
    	$data = Teknisi::latest()->get();

    	return view('teknisi.index', compact($data));
    }

    public function create()
    {
    	return view('teknisi.create');    
    }

    public function store(Request $request)
    {
    	$data = Teknisi::create([
    		'nama_teknisi' => $request->nama_teknisi,
    		'id_telegram' => $request->id_telegram,
    		'sektor' => $request->sektor
    	]);

    	return redirect()->route('teknisi.index')->with('success', 'Data berhasil ditambahkan, yee');
    }

    public function edit($id)
    {
    	$data = Teknisi::findOrFail($id);

    	return view('teknisi.edit', compact($data));
    }

    public function update(Request $resuest, $id)
    {
    	$data = Teknisi::findOrFail($id);

    	$data->update([
    		'nama_teknisi' => $request->nama_teknisi,
    		'id_telegram' => $request->id_telegram,
    		'sektor' => $request->sektor
    	]);

    	return redirect()->route('teknisi.index')->with('success', 'Data Berhasil diubah, yee');
    }

    public function destroy($id)
    {
    	$data = Teknisi::findOrFail($id)->destroy();

    	return redirect()->route('teknisi.index')->with('success', 'Data Berhasil dihapusm yee');
    }
}
