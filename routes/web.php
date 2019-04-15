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

use Illuminate\Support\Facades\DB;

// หน้าหลักของระบบ
Route::get('/', 'Main@index');


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

// หน้าค้นหาโรงพยาบาล
Route::get('search_hospital', 'Search_hospital@index');
// Route::get('search_hospital/destroy/{id}', 'Search_hospitals@destroy');

// หน้าสมัครสมาชิก
Route::get('register', 'Register@index');


// หน้าเนื้อหาบทความ
Route::get('content_article', 'Content_article@index');

//หน้าหลังบ้าน Master
Route::get('master_system', 'Master_system@index');

//หน้าหลังบ้านหน้าแสดงข้อมูลโรงพยาบาล
Route::get('hospital', 'Hospital_system@index');
Route::get('hospital/destroy/{hos_id}','Hospital_system@destroy');
Route::get('hospital/edit/{hos_id}','Hospital_system@edit');
Route::get('hospital/update/{hos_id}','Hospital_system@update');
Route::get('hospital/form_hospital','Hospital_system@form_hospital');
Route::post('hospital/store','Hospital_system@store');
Route::get('hospital/get_amphur/{id}',function ($id) {
    $data = DB::select("SELECT * FROM amphures WHERE province_id = ?", [$id]);
    return $data;
});

//หน้าหลังบ้านแสดงแดงข้อมูลบทความ
Route::get('health', 'Health_system@index');
Route::get('health/form_health','Health_system@form_health');
Route::post('health/store_health','Health_system@store_health');
Route::get('health/destroy/{ha_id}','Health_system@destroy');
Route::get('health/edit/{ha_id}','Health_system@edit');


//หน้าหลังบ้านดูรายการแชร์ประสบการณ์
Route::get('share_system', 'Share_system@index');


//หน้าหลังบ้านโรคหรืออาการ
Route::get('diseases', 'Diseases_symptoms@index');
Route::get('diseases/form_diseases', 'Diseases_symptoms@form_diseases');
Route::post('diseases/store_diseases','Diseases_symptoms@store_diseases');
Route::post('diseases/destroy/{ds_id}','Diseases_symptoms@destroy');
Route::get('diseases/edit/{ds_id}','Diseases_symptoms@edit');