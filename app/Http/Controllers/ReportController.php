<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Exception;
// use App\Models\StudentClass;
use Illuminate\Http\Request;

class ReportController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Report::all()->load('student_class')->load('teacher'));
    }

    public function indexPengumpulan()
    {
        return response()->json(Report::where('type', 'Pengumpulan')->latest()->get()->load('student_class')->load('teacher'));
    }

    public function indexPengambilan()
    {
        return response()->json(Report::where('type', 'Pengambilan')->latest()->get()->load('student_class')->load('teacher'));
    }
    public function indexPeminjaman()
    {
        return response()->json(Report::where('type', 'Peminjaman')->latest()->get()->load('student_class')->load('teacher'));
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
        try {
            $image = $request->file('image')->store('laporan_image');

            $data = new Report;
            $data->officer = $request->officer;
            $data->phone = $request->phone;
            $data->notes = $request->notes;
            $data->date = now();
            $data->type = $request->type;
            $data->image = $image;
            $data->teacher_id = $request->teacher;
            $data->student_class_id = $request->class_id;

            $data->save();

            return response()->json($data);
        } catch (Exception $err) {
            return response()->json($err);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Report::find($id);
        $fixed_data = $data;
        if ($data) {
            $data->delete();

            return response()->json([
                'status' => true,
                'message' => "Berhasil menghapus data id { $fixed_data->id }",
                'data' => $data,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menghapus data',
                'data' => 'Tidak ada data',
            ]);
        }
        // return response()->json($id);
    }
}
