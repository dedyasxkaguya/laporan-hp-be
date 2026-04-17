<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(StudentClass::all()->load('teacher')->load('latestReport'));
    }

    public function indexLatest()
    {
        // return response()->json(StudentClass::all()->load('reports'));
        return response()->json(StudentClass::all()->load('latestReport'));
        // return response()->json("Visca Real Betis");
    }
    // public function indexWeekly($class)
    // {
    //     // return response()->json(StudentClass::all()->load('reports'));
    //     return response()->json(StudentClass::where('full_name',$class));
    //     // return response()->json("Visca Real Betis");
    // }

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
    public function show(StudentClass $studentClass)
    {
        return response()->json($studentClass);
    }

    public function searchByUUID($uuid)
    {
        $studentClass = StudentClass::where('uuid', $uuid)->first();
        if ($studentClass) {
            $studentClass->status = true;
            return response()->json($studentClass->load('weeklyReports')->load('reports')->load('teacher'));
        } else {
            return response()->json(['status' => false]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentClass $studentClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentClass $studentClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentClass $studentClass)
    {
        //
    }
}
