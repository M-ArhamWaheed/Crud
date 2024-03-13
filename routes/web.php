<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserData;

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
})->name('welcome');

Route::get('/signup', function () {
    return view('form');
})->name('signup');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/view', function () {
    return view('view');
})->name('view');

Route::controller(UserData::class)->group(function () {

    Route::post('/signup', 'addUser')->name('submit');
    Route::post('/signin', 'signIn')->name('login');
    Route::get('/read', 'readData')->name('read');
    Route::get('/delete/{id}', 'deleteData')->name('delete');
    Route::get('/view/{id}', 'view')->name('show');
    Route::get('/update/{id}' , 'updatePage')->name('updatePage');
    Route::post('update-data/{id}' , 'updateData')->name('updateData');
});
