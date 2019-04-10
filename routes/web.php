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
Route::get('articles', 'Articles_forhealth@index');
Route::get('for_child', 'For_child@index');
Route::get('search_disease', 'Search_disease@index');
Route::get('search_hospital', 'Search_hospital@index');
Route::get('share_exper', 'Share_exper@index');
Route::get('share', 'Share@index');
Route::get('health_articles', 'Health@index');
// <<<<<<< HEAD
Route::get('register', 'Register@index');

// หน้าค้นหาโรงพยาบาล
Route::get('search_hospital', 'Search_hospital@index');
// Route::get('search_hospital/destroy/{id}', 'Search_hospitals@destroy');

