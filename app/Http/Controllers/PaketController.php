<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Validator;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = Paket::all();
        $outlet = Outlet::all();

        return view('paket.index', compact('paket', 'outlet'));
    }

    public function data(){
        $paket = Paket::orderBy('id', 'desc')->get();

        return datatables()
        ->of($paket)
        ->addIndexColumn()
        ->editColumn('outlet_id', function($paket){
            return $paket->outlet->nama;
        })
        ->addColumn('aksi', function($paket){
            return'
            <div class="btn-group">
                <button onclick="editData(`'.route('paket.update', $paket->id).'`)" class="btn btn-flat btn-xs btn-warning"><i class="fa fa-edit"></i></button>
                <button onclick="deleteData(`'.route('paket.destroy', $paket->id).'`)" class="btn btn-flat btn-xs btn-danger"><i class="fa fa-trash"></i></button>
            </div>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paket.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'outlet_id' => 'required',
            'jenis_paket' => 'required',
            'cucian' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required|numeric'
        ]);

       $paket = Paket::create([
        'outlet_id' => $request->outlet_id,
        'jenis_paket' => $request->jenis_paket,
        'cucian' =>$request->cucian,
        'nama_paket' => $request->nama_paket,
        'harga' => $request->harga
       ]);

       return response()->json([
        'success' => true,
        'massage' => 'Data berhasil disimpan',
        'data' => $paket
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paket = Paket::find($id);
        
        return response()->json($paket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paket = Paket::find($id);
        $paket->outlet_id = $request->outlet_id;
        $paket->jenis_paket = $request->jenis_paket;
        $paket->cucian = $request->cucian;
        $paket->nama_paket = $request->nama_paket;
        $paket->harga = $request->harga;
        return view('paket.form', compact('paket')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paket = Paket::find($id);
        $paket->outlet_id = $request->outlet_id;
        $paket->jenis_paket = $request->jenis_paket;
        $paket->cucian = $request->cucian;
        $paket->nama_paket = $request->nama_paket;
        $paket->harga = $request->harga;
        $paket->update();
        return response()->json('Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $paket = Paket::find($id);
        $paket->delete();
    }
}