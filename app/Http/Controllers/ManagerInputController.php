<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class ManagerInputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::whereNotNull('name')->where('status', 'Pending for Manager')->orderBy('id', 'DESC')->get();
    	return view('menu.managerinput',['pegawai' => $pegawai]);
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
            'status' => "Pending for GM",
        ]);
        return redirect()->route('manager');
    }
    public function decline(Request $request, string $id)
    {
        Pegawai::where('id',$request->id)->update([
            'status' => "Declined by Manager",
        ]);
        return redirect()->route('manager');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
