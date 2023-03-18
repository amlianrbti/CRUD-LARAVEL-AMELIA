<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
                  
Route::get('crud', [DashboardController::class, 'index'])->name('post_seru');
Route::get('create', [DashboardController::class, 'create']);
Route::post('store', [DashboardController::class, 'store']);
Route::get('edit/{id}', [DashboardController::class, 'edit']);
Route::post('update', [DashboardController::class, 'update']);
Route::get('delete/{id}', [DashboardController::class, 'delete']);