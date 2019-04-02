<?php

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
// หน้าหลักของระบบ
Route::get('/', function () {
    return view('v_main');
});

// Template หลัก
// Route::get('/', function () {
//     return view('v_master');
// });
Route::get('master', 'Master@index');
//หน้า Login
Route::get('login', 'Loginv@index');
Route::get('Articles', 'Articles_forhealth@index');
