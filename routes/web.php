<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;  
use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
Route::get('/adminstration/admin-dashboard',[DashboardController::Class,'getDashboard'])->name('Admin Dashboard');
Route::get('/dashboard',[DashboardController::Class,'getAcademicDashboard'])->name('Academic Dashboard');
});
Route::get('/logout',[LogoutController::Class,'logoutUser'])->middleware('auth');
Route::get('/register', function () {return redirect('/404-error');});
Route::get('/404-error', function () {return view('errorpage');});
Route::get('/about', function(){ return view('frontpages.about');})->name('About');
Route::get('/courses', function(){ return view('frontpages.courses');})->name('Course');
Route::get('/events', function(){ return view('frontpages.events');})->name('Events');
Route::get('/latests-news', function(){ return view('frontpages.latests-news');})->name('Latest News');
Route::get('/apply-now', function(){ return view('frontpages.apply-now');})->name('Online Application');
Route::get('/contact', function(){ return view('frontpages.contact');})->name('Contact');
Route::get('/approved-applicants', function(){ return view('frontpages.approved-applicants');})->name('List of Successful Applicants');
Route::get('/pending-applicants', function(){ return view('frontpages.pending-applicants');})->name('List of Pending Applicants');
