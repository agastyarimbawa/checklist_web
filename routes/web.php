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
Route::get('/','Auth\LoginController@showLoginForm');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', 'Pages@index');

    //cek kondisi
    Route::get('/checklist', 'ReportController@checklist');
});

Route::group(['middleware' => ['auth','checkRole:admin']], function(){
    //user
    Route::get('/pages/user','UserController@user');
    Route::get('/pages/user/tambah','UserController@tambah_user');
    Route::get('/pages/user/edit/{id}','UserController@edit_user');
    Route::post('/pages/user/update/{id}','UserController@update_user');
    Route::get('/pages/user/delete/{id}','UserController@destroy_user');
    
    
    
    //layanan
    Route::get('/pages/items/layanan','LayananController@index');
    Route::get('/pages/items/layanan/tambah','LayananController@tambah');
    Route::post('/pages/items/layanan/insert','LayananController@store');
    Route::get('/pages/items/layanan/edit/{id}','LayananController@edit');
    Route::post('/pages/items/layanan/update/{id}','LayananController@update');
    Route::get('/pages/items/layanan/delete/{id}','LayananController@destroy');
    
    
    
    //object
    Route::get('/pages/items/object','ObjekController@index');
    Route::get('/pages/items/object/tambah','ObjekController@tambah');
    Route::post('/pages/items/object/insert','ObjekController@store');
    Route::get('/pages/items/object/edit/{id}','ObjekController@edit');
    Route::post('/pages/items/object/update/{id}','ObjekController@update');
    Route::get('/pages/items/object/delete/{id}','ObjekController@destroy');

    
    
    //perangkat
    Route::get('/pages/items/perangkat','PerangkatController@index');
    Route::get('/pages/items/perangkat/tambah','PerangkatController@tambah');
    Route::post('/pages/items/perangkat/insert','PerangkatController@store');
    Route::get('/pages/items/perangkat/edit/{id}','PerangkatController@edit');
    Route::post('/pages/items/perangkat/update/{id}','PerangkatController@update');
    Route::get('/pages/items/perangkat/delete/{id}','PerangkatController@destroy');
    
    
    
    //alat
    Route::get('/pages/items/alat','AlatController@index');
    Route::get('/pages/items/alat/tambah','AlatController@tambah');
    Route::get('/pages/items/alat/edit/{id}','AlatController@edit');
    Route::post('/pages/items/alat/update/{id}','AlatController@update');
    Route::get('/pages/items/alat/delete/{id}','AlatController@destroy');
    
    
    
    //lokasi
    Route::get('/pages/items/lokasi','LokasiController@index');
    Route::get('/pages/items/lokasi/tambah','LokasiController@tambah');
    Route::post('/pages/items/lokasi/insert','LokasiController@store');
    Route::get('/pages/items/lokasi/edit/{id}','LokasiController@edit');
    Route::post('/pages/items/lokasi/update/{id}','LokasiController@update');
    Route::get('/pages/items/lokasi/delete/{id}','LokasiController@destroy');



    //checklist
    Route::get('/pages/items/checklist','ChecklistController@index');
    Route::get('/pages/items/checklist/tambah','ChecklistController@tambah');
    Route::post('/pages/items/checklist/insert','ChecklistController@store');
    Route::get('/pages/items/checklist/edit/{id}','ChecklistController@edit');
    Route::post('/pages/items/checklist/update/{id}','ChecklistController@update');
    Route::get('/pages/items/checklist/delete/{id}','ChecklistController@destroy');
});



//Route User

Auth::routes();

