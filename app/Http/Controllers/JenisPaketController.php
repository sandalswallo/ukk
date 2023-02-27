<?php

namespace App\Http\Controllers;

use App\Models\JenisPaket;
use Illuminate\Http\Request;
use Validator;

class JenisPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenispaket = JenisPaket::all();
        return view('jenis_paket.index', compact('jenispaket'));
    }

    public function data(){
        $jenispaket = JenisPaket::orderBy('id', 'desc')->get();

        return datatables()
        ->of($jenispaket)
        ->addIndexColumn()
        ->addColumn('aksi', function($jenispaket){
            return'
            <div class="btn-group">
                <button onclick="editData(`'.route('jenispaket.update', $jenispaket->id).'`)" class="btn btn-flat btn-xs btn-warning"><i class="fa fa-edit"></i></button>
                <button onclick="deleteData(`'.route('jenispaket.destroy', $jenispaket->id).'`)" class="btn btn-flat btn-xs btn-danger"><i class="fa fa-trash"></i></button>
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
        return view('jenispaket.form');
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

       $jenispaket = JenisPaket::create([
        'nama' => $request->nama
       ]);

       return response()->json([
        'success' => true,
        'massage' => 'Data berhasil disimpan',
        'data' => $jenispaket
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jenispaket  $jenispaket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenispaket = JenisPaket::find($id);
        return response()->json($jenispaket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jenispaket  $jenispaket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenispaket = JenisPaket::find($id);
        return view('jenispaket.form', compact('jenispaket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jenispaket  $jenispaket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jenispaket = JenisPaket::find($id);
        $jenispaket->nama = $request->nama;
        $jenispaket->update();
        return response()->json('Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jenispaket  $jenispaket
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $jenispaket = JenisPaket::find($id);
        $jenispaket->delete();
    }
}