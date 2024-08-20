<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Auth;

class EmployeeInputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("menu.employeeinput");
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
        $user_id = Auth::user()->id;
        $name = $request->name;
        $date_submit = $request->date_submit;
        $company = $request->company;
        $department = $request->department;
        $type = $request->type;
        $priority = $request->priority;
        $date_require = $request->date_require;
        $description = $request->description;
        $scope = $request->scope;
        $design_time = $request->design_time;
        $design_remark = $request->design_remark;
        $test_time = $request->test_time;
        $test_remark = $request->test_remark;
        $accept_time = $request->accept_time;
        $accept_remark = $request->accept_remark;
        $total_time = $request->total_time;
        $total_remark = $request->total_remark;
        $impact = $request->impact;
        Pegawai::insert([
            "user_id" => $user_id,
            "name" => $name,
            "date_submit" => $date_submit,
            "company" => $company,
            "department" => $department,
            "type" => $type,
            "priority" => $priority,
            "date_require" => $date_require,
            "description" => $description,
            "scope" => $scope,
            "design_time" => $design_time,
            "design_remark" => $design_remark,
            "test_time" => $test_time,
            "test_remark" => $test_remark,
            "accept_time" => $accept_time,
            "accept_remark" => $accept_remark,
            "total_time" => $total_time,
            "total_remark" => $total_remark,
            "impact" => $impact,
        ]);
        return redirect()->route('employee_list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pegawai = Pegawai::where('id', $id)->first();
        return view('menu.edit', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Kent was here
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Pegawai::where('id',$id)->update([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'date_submit' => $request->date_submit,
            'company' => $request->company,
            'department' => $request->department,
            'type' => $request->type,
            'priority' => $request->priority,
            'date_require' => $request->date_require,
            'description' => $request->description,
            'scope' => $request->scope,
            'design_time' => $request->design_time,
            'design_remark' => $request->design_remark,
            'test_time' => $request->test_time,
            'test_remark' => $request->test_remark,
            'accept_time' => $request->accept_time,
            'accept_remark' => $request->accept_remark,
            'total_time' => $request->total_time,
            'total_remark' => $request->total_remark,
            'impact' => $request->impact,
        ]);
        return redirect()->route('edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pegawai::where('id',$id)->delete();
        return redirect()->route('edit');
    }
}
