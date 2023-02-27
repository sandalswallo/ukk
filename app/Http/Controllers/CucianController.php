<?php

namespace App\Http\Controllers;

use App\Models\cucian;
use Illuminate\Http\Request;
use Validator;


class CucianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cucian = Cucian::all();
        return view('cucian.index', compact('cucian'));
    }

    public function data(){
        $cucian = Cucian::orderBy('id', 'desc')->get();

        return datatables()
        ->of($cucian)
        ->addIndexColumn()
        ->addColumn('aksi', function($cucian){
            return'
            <div class="btn-group">
                <button onclick="editData(`'.route('cucian.update', $cucian->id).'`)" class="btn btn-flat btn-xs btn-warning"><i class="fa fa-edit"></i></button>
                <button onclick="deleteData(`'.route('cucian.destroy', $cucian->id).'`)" class="btn btn-flat btn-xs btn-danger"><i class="fa fa-trash"></i></button>
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
        return view('cucian.form');
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

       $cucian = Cucian::create([
        'nama' => $request->nama
       ]);

       return response()->json([
        'success' => true,
        'massage' => 'Data berhasil disimpan',
        'data' => $cucian
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cucian  $cucian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cucian = Cucian::find($id);
        return response()->json($cucian);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cucian  $cucian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cucian = Cucian::find($id);
        return view('cucian.form', compact('cucian')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cucian  $cucian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cucian = Cucian::find($id);
        $cucian->nama = $request->nama;
        $cucian->update();
        return response()->json('Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cucian  $cucian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cucian = Cucian::find($id);
        $cucian->delete();
    }
}