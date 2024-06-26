<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'role'], function(){
    Route::get('/', [RoleController::class, 'index']);
    Route::post('/list', [RoleController::class, 'list']);
    Route::get('/create', [RoleController::class, 'create']);
    Route::post('/', [RoleController::class,'store']);
    Route::get('/{id}', [RoleController::class, 'show']);
    Route::get('/{id}/edit', [RoleController::class, 'edit']);
    Route::put('/{id}', [RoleController::class, 'update']);
    Route::delete('/{id}', [RoleController::class, 'destroy']);
});

Route::group(['prefix' => 'user'], function(){
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class,'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::group(['prefix' => 'kode'], function(){
    Route::get('/', [KodeBarangController::class, 'index']);
    Route::post('/list', [KodeBarangController::class, 'list']);
    Route::get('/create', [KodeBarangController::class, 'create']);
    Route::post('/', [KodeBarangController::class,'store']);
    Route::get('/{id}', [KodeBarangController::class, 'show']);
    Route::get('/{id}/edit', [KodeBarangController::class, 'edit']);
    Route::put('/{id}', [KodeBarangController::class, 'update']);
    Route::delete('/{id}', [KodeBarangController::class, 'destroy']);
});

Route::group(['prefix' => 'barang'], function(){
    Route::get('/', [BarangController::class, 'index']);
    Route::post('/list', [BarangController::class, 'list']);
    Route::get('/create', [BarangController::class, 'create']);
    Route::post('/', [BarangController::class,'store']);
    Route::get('/{id}', [BarangController::class, 'show']);
    Route::get('/{id}/edit', [BarangController::class, 'edit']);
    Route::put('/{id}', [BarangController::class, 'update']);
    Route::delete('/{id}', [BarangController::class, 'destroy']);
});

Route::group(['prefix' => 'status'], function(){
    Route::get('/', [StatusController::class, 'index']);
    Route::post('/list', [StatusController::class, 'list']);
    Route::get('/create', [StatusController::class, 'create']);
    Route::post('/', [StatusController::class,'store']);
    Route::get('/{id}', [StatusController::class, 'show']);
    Route::get('/{id}/edit', [StatusController::class, 'edit']);
    Route::put('/{id}', [StatusController::class, 'update']);
    Route::delete('/{id}', [StatusController::class, 'destroy']);
});

Route::group(['prefix' => 'ruang'], function(){
    Route::get('/', [RuangController::class, 'index']);
    Route::post('/list', [RuangController::class, 'list']);
    Route::get('/create', [RuangController::class, 'create']);
    Route::post('/', [RuangController::class,'store']);
    Route::get('/{id}', [RuangController::class, 'show']);
    Route::get('/{id}/edit', [RuangController::class, 'edit']);
    Route::put('/{id}', [RuangController::class, 'update']);
    Route::delete('/{id}', [RuangController::class, 'destroy']);
});

Route::group(['prefix' => 'distribusi'], function(){
    Route::get('/', [DistribusiController::class, 'index']);
    Route::post('/list', [DistribusiController::class, 'list']);
    Route::get('/create', [DistribusiController::class, 'create']);
    Route::post('/', [DistribusiController::class,'store']);
    Route::get('/{id}', [DistribusiController::class, 'show']);
    Route::get('/{id}/edit', [DistribusiController::class, 'edit']);
    Route::put('/{id}', [DistribusiController::class, 'update']);
    Route::delete('/{id}', [DistribusiController::class, 'destroy']);
});