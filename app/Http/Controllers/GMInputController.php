<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class GMInputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::whereNotNull('name')->where('status', 'Pending for GM')->orderBy('id', 'DESC')->get();
    	return view('menu.gminput',['pegawai' => $pegawai]);
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
        Pegawai::where('id',$request->id)->update([
            'status' => "Approved",
        ]);
        return redirect()->route('gm');
    }
    public function decline(Request $request, string $id)
    {
        Pegawai::where('id',$request->id)->update([
            'status' => "Declined by GM",
        ]);
        return redirect()->route('gm');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
