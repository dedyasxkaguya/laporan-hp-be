<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(User::all());
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
    public function getAccount(Request $request)
    {
        return response()->json($request->user());
        // return response()->json("Nice");
    }

    public function login(Request $request)
    {
        $credentials = $request->validate(['username' => 'required', 'password' => 'required']);
        $status = Auth::attempt($credentials);
        if ($status) {
            $token = Auth::user()->createToken('auth_token')->plainTextToken;

            return response()->json(
                [
                    'status' => $status,
                    'data' => Auth::user(),
                    'token' => $token,
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => $status,
                    'data' => 'Tidak menemukan akun, periksa username dan password',
                ]
            );
        }
    }

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
