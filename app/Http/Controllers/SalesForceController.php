<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesForceController extends Controller
{
    public function index()
    {
    	$data = Teknisi::latest()->get();

    	return view('salesforce.index', compact($data));
    }

    public function create()
    {
    	return view('salesforce.create');    
    }

    public function store(Request $request)
    {
    	$data = Teknisi::create([
    		'nama' => $request->nama,
    		'agency' => $request->agency,
    		'mitra' => $request->kkontak,
    		'spv' => $request->spv,
    		'tl' => $request->tl,
    		'kehadiran' => $request->kehadiran
    	]);

    	return redirect()->route('salesforce.index')->with('success', 'Data berhasil ditambahkan, yee');
    }

    public function edit($id)
    {
    	$data = Teknisi::findOrFail($id);

    	return view('salesforce.edit', compact($data));
    }

    public function update(Request $resuest, $id)
    {
    	$data = Teknisi::findOrFail($id);

    	$data->update([
    		'id' => $request->id,
    		'nama' => $request->nama,
    		'agency' => $request->agency
    		'mitra' => $request->kkontak
    		'spv' => $request->spv
    		'tl' => $request->tl
    		'kehadiran' => $request->kehadiran
    	]);

    	return redirect()->route('salesforce.index')->with('success', 'Data Berhasil diubah, yee');
    }

    public function destroy($id)
    {
    	$data = Teknisi::findOrFail($id)->destroy();

    	return redirect()->route('salesforce.index')->with('success', 'Data Berhasil dihapus, yee');
    } 
}
