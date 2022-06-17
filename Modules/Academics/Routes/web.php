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

Route::group(['prefix'=>'academics', 'middleware'=>['auth']],function(){ 
    Route::get('/', 'AcademicsController@index'); 
    Route::get('/levels','LevelsController@levels')->name('Levels');
    Route::get('/classes','ClassesController@getClasses')->name('Classes'); 
    Route::get('/subjects','SubjectsController@getSubjects')->name('Subjects'); 
    Route::get('/add-students-registration-form','StudentsRegistrationController@AddStudentForm')->name('Students Form');
    Route::get('/students-registration','StudentsRegistrationController@getAllStudents')->name('All Students');
    Route::get('/get-teaching-staffs','TeachingStaffController@getTeachingStaff')->name('Teaching Staff');
    Route::get('/add-teaching-staffs','TeachingStaffController@addTeachingStaff')->name('Teaching Staff Form');
    Route::get('/non-teaching-staffs','NonTeachingStaffController@nonTeachingStaff')->name('Non Teaching Staff');
    Route::get('/add-non-teaching-staff','NonTeachingStaffController@addNonTeachingStaff')->name('Non Teaching Staff Form');
});
