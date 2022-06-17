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

Route::group(['prefix'=>'teachingstaff', 'middleware'=>['auth']],function(){  
    Route::get('/dashboard', 'TeachingStaffController@index')->name('My Dashboard');
    Route::get('/all-classes', 'ClassessController@teachersClasses')->name('My Classes');
    Route::get('/view-subjects/{{teachers_id}}', 'ClassessController@teachersClasses')->name('My Classes');
});
