<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanningController extends Controller
{
    public function index()
    {
    	$data = Teknisi::latest()->get();

    	return view('planning.index', compact($data));
    }

    public function create()
    {
    	return view('planning.create');    
    }

    public function store(Request $request)
    {
    	$data = Teknisi::create([
    		'nama_planning' 	=> 	$request->nama_planning,
    		'jenis_planning' 	=> 	$request->jenis_planning,
    		'status_planning' 	=> 	$request->status_planning
    	]);

    	return redirect()->route('planning.index')->with('success', 'Data berhasil ditambahkan, yee');
    }

    public function edit($id)
    {
    	$data = Teknisi::findOrFail($id);

    	return view('planning.edit', compact($data));
    }

    public function update(Request $resuest, $id)
    {
    	$data = Teknisi::findOrFail($id);

    	$data->update([
    		'id' 				=> 	$request->id,
    		'nama_planning' 	=> 	$request->nama_planning,
    		'jenis_planning' 	=> 	$request->jenis_planning,
    	]);

    	return redirect()->route('planning.index')->with('success', 'Data Berhasil diubah, yee');
    }

    public function destroy($id)
    {
    	$data = Teknisi::findOrFail($id)->destroy();

    	return redirect()->route('planning.index')->with('success', 'Data Berhasil dihapusm yee');
    }
}
