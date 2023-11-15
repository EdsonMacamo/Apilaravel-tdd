<?php

use App\Http\Controllers\Api\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/courses/{identify}', [CourseController::class, 'show']);
Route::post('/courses', [CourseController::class, 'store']);
Route::get('/courses', [CourseController::class, 'index']);

Route::get('/', function (){
    return response()->json(['message' => 'ok']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
