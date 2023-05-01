<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
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


Route::get('/', function () {
    return view('home', [
        'name' => 'muhamad farras',
        'role' => 'admin',
        'buah' => ['pisang', 'apel', 'jeruk', 'semangka', 'kiwi']   
    ]);
});

// ketika url students di akses akan dialihkan ke StudentsController dengan function index
Route::get('/students', [StudentController::class, 'index']);
Route::get('/class', [ClassController::class, 'index']);
