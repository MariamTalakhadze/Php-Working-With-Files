<?php
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
// ლარაველის 1 დავალება
// Route::get('/add', 'addcontroller@add');
// Route::get('/', 'selectwithupdatecontroller@select');

// ლარაველის მეორე დავალება
Route::get('/blogs/create', 'createblogcontroller@create');
Route::get('/blogs/index', 'createblogcontroller@index');
Route::get('/blogs/index/date', 'createblogcontroller@date');
Route::get('/blogs/index/in', 'createblogcontroller@in');
Route::get('/blogs/index/delete', 'createblogcontroller@deleted');