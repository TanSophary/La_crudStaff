<?php

use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/',([StaffController::class,'getStaff']));
Route::get('/addNew',([StaffController::class,'add_NewStaff']));
Route::post('/submitStaff',([StaffController::class,'handleInsertStaff']));
Route::get('/getDetailById/{id}',([StaffController::class,'getDetail']));

// update
Route::get('/updateStaff/{id}',([StaffController::class,'updateStaff']));
Route::post('/handlUpdateStaff',([StaffController::class,'handleUpdateStaff']));

// delete
Route::get('/getDelete/{id}',([StaffController::class,'delete']));
Route::post('/handleDelete',([StaffController::class,'handleDelete']));

Route::get('/dashboard',([StaffController::class,'dashboard']));