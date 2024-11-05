<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use DataTables;
use Validator;


class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Jabatan::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('edit', function ($data) {
                    return '<button type="button" onclick="editForm(' . $data->id . ')" class="btn btn-sm btn-primary btn-flat text-center ti ti-edit"></button>'.
                    ' | <button type="button" onclick="hapus(' . $data->id . ')" class="btn btn-sm btn-danger btn-flat text-center ti ti-trash"></button>';
                })
                ->rawColumns(['edit'])
                ->make(true);
        }
        return view('jabatan.jabatan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cek = Validator::make($request->all(), [
            'jabatan' => ['required'],
            'gaji' => ['required', 'numeric'],
        ],[
            'jabatan.required'=> 'Jabatan Wajib diisi !!!',
            'gaji.required'=> 'Gaji Wajib diisi !!!',
            'gaji.numeric'=> 'Gaji Wajib Angka !!!',
        ]);

        if ($cek->fails()) {
            return response()->json(['sukses' => false, 'error' => $cek->errors()]);
        }else{
            $jabatan=new Jabatan();
            $jabatan->jabatan=$request['jabatan'];
            $jabatan->gaji=$request['gaji'];
            $jabatan->save();

            return response()->json([
                'sukses'=> true,
                'message'=> 'Berhasil Tambah Data !'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jabatan = Jabatan::where('id',$id)->first();
        return response()->json([
            'data'=>$jabatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cek = Validator::make($request->all(), [
            'jabatan' => ['required'],
            'gaji' => ['required', 'numeric'],
        ],[
            'jabatan.required'=> 'Jabatan Wajib diisi !!!',
            'gaji.required'=> 'Gaji Wajib diisi !!!',
            'gaji.numeric'=> 'Gaji Wajib Angka !!!',
        ]);

        if ($cek->fails()) {
            return response()->json(['sukses' => false, 'error' => $cek->errors()]);
        }else{
            $jabatan=Jabatan::where('id', $id)->first();
            $jabatan->jabatan=$request['jabatan'];
            $jabatan->gaji=$request['gaji'];
            $jabatan->update();

            return response()->json([
                'sukses'=> true,
                'message'=> 'Berhasil Update Data !'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jabatan = Jabatan::where('id',$id)->delete();
        return response()->json([
            'sukses'=> true,
            'message'=> 'Berhasil Hapus Data !'
        ]);
    }
}
