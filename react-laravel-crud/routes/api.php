<?php

use App\Http\Controllers\API\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('add-student',[StudentController::class,'store']);
Route::get("/ind",function(){
    return "hello";
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
