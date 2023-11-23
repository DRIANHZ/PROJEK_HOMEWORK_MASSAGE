<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

//====================================================================================
//route menu
Route::get('/home',[BlogController::class,'home']);
//====================================================================================
//route add new task
Route::get('/home/Newtask',[BlogController::class,'NewTask']);
Route::post('/home/AddTask',[BlogController::class,'AddTask']);
//=====================================================================================
//route untuk menghapus task
Route::get('/hapus/{id}',[BlogController::class, 'hapus']);
//=====================================================================================
//route untuk menfilter pr
Route::get('/home/{mapelId}', [BlogController::class, 'filter']);
//=====================================================================================
// DONE:ganti font web nya
// TODO:fix bug navbar slider filter
//TODO:fitur edit content
//TODO:buat interface khusus user
// TODO:buat login admin
//TODO:tambahin time di db
//TODO:tambahin keterangan kapan tugas selsai
//TODO:kasih validasi
//TODO:kasih validasi interface
//TODO:kasih timer kapan tugas hilang/selesai
//TODO:bikin wa bot
//TODO:bikin massage ke wa bot
//TODO:buat admin baru khsus guru
//TODO:buat fitur hubungi guru link langsung ke no wa guru mapel nya



