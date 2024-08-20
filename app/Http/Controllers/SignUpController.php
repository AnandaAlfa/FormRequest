<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("signup");
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
        $position = $request->position;

        $emailCheck = User::where('email', $email)->first();
        if ($emailCheck) {
           printf("Email has already been registered. Please log in.");
        } else {
        $users = User::insertGetId([
            "name" => explode('@', $email)[0],
            "email" => $email,
            "password" => bcrypt($password),
            "position" => $position
        ]);

        Pegawai::insert([
            "user_id" => $users,
        ]);

        return redirect()->intended('login');
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
