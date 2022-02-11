<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileManagementController;

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

Route::get('/', [FileManagementController::class, 'index']);
Route::post('/create_folder', [FileManagementController::class, 'store']);
Route::get('/file-explorer', [FileManagementController::class, 'fileExplorer']);

