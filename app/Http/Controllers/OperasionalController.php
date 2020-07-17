<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperasionalController extends Controller
{
    function index()
    {
        return view('operasional.index');
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $data = Livetable::all();
            echo json_encode($data);
        }
    }

    public function test()
    {
        $data = Livetable::all();
        dd($data);
    }

    function add_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                    'no_sc'             =>  $request->no_sc,
                    'myir'              =>  $request->myir,
                    'nama_pelanggan'    =>  $request->nama_pelanggan,
                    'nomor_hp'   		=>  $request->nomor_hp,
                    'paket'             =>  $request->paket,
                    'kkontak'           =>  $request->deposit,
                    'alamat'            =>  $request->alamat,
                    'tikor'             =>  $request->tikor,
                    'odp'         		=>  $request->odp,
                    'alternatif_odp'    =>  $request->alternatif_odp,
                    'status_order'      =>  $request->status_order,
                    'status_penarikan'  =>  $request->status_penarikan,
                    'delok'        		=>  $request->delok,
                    'foto_rumah'        =>  $request->foto_rumah,
                    'tanggal_ps'        =>  $request->tanggal_ps,
            );
            
            $id = DB::table('tb_profesioning.operasional')->insert($data);
            if($id > 0)
            {
                echo '<div class="alert alert-success">Data Inserted</div>';
            }
        } 
    }

    function update_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name    =>  $request->column_value
            );
            DB::table('tb_profesioning.operasional')
                ->where('id', $request->id)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }
    }

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
            DB::table('tb_profesioning.operasional')
                ->where('id', $request->id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }
}
}
