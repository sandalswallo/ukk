<?php

namespace App\Http\Controllers;

use App\Models\Berat;
use Illuminate\Http\Request;
use Validator;

class BeratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berat = Berat::all();
        return view('berat.index', compact('berat'));
    }

    public function data(){
        $berat = Berat::orderBy('id', 'desc')->get();

        return datatables()
        ->of($berat)
        ->addIndexColumn()
        ->addColumn('aksi', function($berat){
            return'
            <div class="btn-group">
                <button onclick="editData(`'.route('berat.update', $berat->id).'`)" class="btn btn-flat btn-xs btn-warning"><i class="fa fa-edit"></i></button>
                <button onclick="deleteData(`'.route('berat.destroy', $berat->id).'`)" class="btn btn-flat btn-xs btn-danger"><i class="fa fa-trash"></i></button>
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
        return view('berat.form');
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

       $berat = Berat::create([
        'nama' => $request->nama
       ]);

       return response()->json([
        'success' => true,
        'massage' => 'Data berhasil disimpan',
        'data' => $berat
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berat  $berat
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $berat = Berat::find($id);
        return response()->json($berat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berat  $berat
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $berat = Berat::find($id);
        return view('berat.form', compact('berat')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berat  $berat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $berat = Berat::find($id);
        $berat->nama = $request->nama;
        $berat->update();
        return response()->json('Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berat  $berat
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $berat = Berat::find($id);
        $berat->delete();
    }
}