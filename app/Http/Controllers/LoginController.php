<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("login");
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
        $email = $request->email;
        $password = $request->password;
        if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password], null)) {
            if (Auth::user()->position == "employee"){
                return redirect()->route('employee_dashboard');
            } else if (Auth::user()->position == "manager"){
                return redirect()->route('manager_dashboard');
            }else if (Auth::user()->position == "gm"){
                return redirect()->route('gm_dashboard');
            } else {
                printf("Employee does not have a position.");
            }

        } else {
            printf("Wrong credentials.");
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
