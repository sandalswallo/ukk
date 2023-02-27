<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Validator;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::all();
        return view('layanan.index', compact('layanan'));
    }

    public function data(){
        $layanan = Layanan::orderBy('id', 'desc')->get();

        return datatables()
        ->of($layanan)
        ->addIndexColumn()
        ->addColumn('aksi', function($layanan){
            return'
            <div class="btn-group">
                <button onclick="editData(`'.route('layanan.update', $layanan->id).'`)" class="btn btn-flat btn-xs btn-warning"><i class="fa fa-edit"></i></button>
                <button onclick="deleteData(`'.route('layanan.destroy', $layanan->id).'`)" class="btn btn-flat btn-xs btn-danger"><i class="fa fa-trash"></i></button>
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
        return view('layanan.form');
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
            'nama' => 'required|alpha'   
        ]);

       $layanan = Layanan::create([
        'nama' => $request->nama
       ]);

       return response()->json([
        'success' => true,
        'massage' => 'Data berhasil disimpan',
        'data' => $layanan
       ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $layanan = Layanan::find($id);
        return response()->json($layanan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $layanan = Layanan::find($id);
        return view('layanan.form', compact('layanan')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $layanan = Layanan::find($id);
        $layanan->nama = $request->nama;
        $layanan->update();
        return response()->json('Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();
    }
}