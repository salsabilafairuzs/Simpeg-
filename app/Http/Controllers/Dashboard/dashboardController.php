<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\Departemen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['jabatan'] = Jabatan::count();
        $data['departemen'] = Departemen::count();
        $data['pegawai'] = Pegawai::count();

        return view('dashboard.dashboard',$data);
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
