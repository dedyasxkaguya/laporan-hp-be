<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentClassController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function() {
    Route::post('/getaccount', [UserController::class,'getAccount']);
});

Route::resource('/user', UserController::class);

Route::resource('/class', StudentClassController::class);

Route::resource('/report', ReportController::class);

Route::resource('/teacher', TeacherController::class);

Route::get('/class/search/latest', [StudentClassController::class,'indexLatest']);
Route::get('/class/searchByUUID/{uuid}', [StudentClassController::class,'searchByUUID']);
Route::get('/report/type/pengumpulan', [ReportController::class,'indexPengumpulan']);
Route::get('/report/type/pengambilan', [ReportController::class,'indexPengambilan']);

Route::post('/login', [UserController::class,'login']);