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
    Route::get('/home', 'pages@index');

    //cek kondisi
    Route::get('/checklist', 'reportcontroller@checklist');
});

Route::group(['middleware' => ['auth','checkRole:admin']], function(){
    //user
    Route::get('/pages/user','usercontroller@user');
    Route::get('/pages/user/tambah','usercontroller@tambah_user');
    Route::get('/pages/user/edit/{id}','usercontroller@edit_user');
    Route::post('/pages/user/update/{id}','usercontroller@update_user');
    Route::get('/pages/user/delete/{id}','usercontroller@destroy_user');
    
    
    
    //layanan
    Route::get('/pages/items/layanan','layanancontroller@index');
    Route::get('/pages/items/layanan/tambah','layanancontroller@tambah');
    Route::post('/pages/items/layanan/insert','layanancontroller@store');
    Route::get('/pages/items/layanan/edit/{id}','layanancontroller@edit');
    Route::post('/pages/items/layanan/update/{id}','layanancontroller@update');
    Route::get('/pages/items/layanan/delete/{id}','layanancontroller@destroy');
    
    
    
    //object
    Route::get('/pages/items/object','objekcontroller@index');
    Route::get('/pages/items/object/tambah','objekcontroller@tambah');
    Route::post('/pages/items/object/insert','objekcontroller@store');
    Route::get('/pages/items/object/edit/{id}','objekcontroller@edit');
    Route::post('/pages/items/object/update/{id}','objekcontroller@update');
    Route::get('/pages/items/object/delete/{id}','objekcontroller@destroy');

    
    
    //perangkat
    Route::get('/pages/items/perangkat','perangkatcontroller@index');
    Route::get('/pages/items/perangkat/tambah','perangkatcontroller@tambah');
    Route::post('/pages/items/perangkat/insert','perangkatcontroller@store');
    Route::get('/pages/items/perangkat/edit/{id}','perangkatcontroller@edit');
    Route::post('/pages/items/perangkat/update/{id}','perangkatcontroller@update');
    Route::get('/pages/items/perangkat/delete/{id}','perangkatcontroller@destroy');
    
    
    
    //alat
    Route::get('/pages/items/alat','alatcontroller@index');
    Route::get('/pages/items/alat/tambah','alatcontroller@tambah');
    Route::get('/pages/items/alat/edit/{id}','alatcontroller@edit');
    Route::post('/pages/items/alat/update/{id}','alatcontroller@update');
    Route::get('/pages/items/alat/delete/{id}','alatcontroller@destroy');
    
    
    
    //lokasi
    Route::get('/pages/items/lokasi','lokasicontroller@index');
    Route::get('/pages/items/lokasi/tambah','lokasicontroller@tambah');
    Route::post('/pages/items/lokasi/insert','lokasicontroller@store');
    Route::get('/pages/items/lokasi/edit/{id}','lokasicontroller@edit');
    Route::post('/pages/items/lokasi/update/{id}','lokasicontroller@update');
    Route::get('/pages/items/lokasi/delete/{id}','lokasicontroller@destroy');



    //checklist
    Route::get('/pages/items/checklist','checklistcontroller@index');
    Route::get('/pages/items/checklist/tambah','checklistcontroller@tambah');
    Route::post('/pages/items/checklist/insert','checklistcontroller@store');
    Route::get('/pages/items/checklist/edit/{id}','checklistcontroller@edit');
    Route::post('/pages/items/checklist/update/{id}','checklistcontroller@update');
    Route::get('/pages/items/checklist/delete/{id}','checklistcontroller@destroy');
});



//Route User

Auth::routes();

