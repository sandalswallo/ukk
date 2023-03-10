<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Validator;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::all();
        return view('member.index', compact('member'));
    }

    public function data() // Menambahkan DataTable
    {
        $member = Member::orderBy('id', 'desc')->get();

        return datatables()
        ->of($member)
        ->addIndexColumn()
        ->addColumn('aksi', function($member){
            return '
            
            <div class="btn-group">
                <button onclick="editData(`' .route('member.update', $member->id). '`)" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                <button onclick="deleteData(`' .route('member.destroy', $member->id). '`)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make ($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|numeric',
            'jenis_kelamin' => 'required' 
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422); 
        }

        $member = Member::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);

        return response()->json([
            'success'=>true,
            'message' => 'Data Berhasil Tesimpan',
            'data' => $member
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member=Member::find($id);
        return response()->json($member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find($id);
        return view('member.index', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $member->nama = $request->nama;
        $member->alamat = $request->alamat;
        $member->telepon = $request->telepon;
        $member->jenis_kelamin = $request->jenis_kelamin;
        $member->update();

        return response()->json('Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
 
        return redirect('member');
    }
}