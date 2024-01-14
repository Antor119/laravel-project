<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [PageController::class, 'dashboard'])->name('pages.master');
Route::get('/home', [PageController::class, 'home'])->name('pages.home');
Route::get('/about', [PageController::class, 'about'])->name('pages.about');

Route::get('/appointment', [PageController::class, 'appointment'])->name('pages.appointment');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/signup', [PageController::class, 'signup'])->name('pages.signup');
Route::get('/datainsert', [PageController::class, 'datainsert'])->name('datainsert');
Route::post('/signupdata', [PageController::class, 'signupdata'])->name('signupdata');
Route::post('/logindata', [PageController::class, 'logindata'])->name('logindata');
Route::post('/logout', [PageController::class, 'logout'])->name('logout');
Route::get('/service', [PageController::class, 'service'])->name('pages.service');
Route::get('/doctor', [PageController::class, 'doctor'])->name('pages.doctor');
Route::get('/contact', [PageController::class, 'contact'])->name('pages.contact');
Route::get('/portfolio/{id}', [PageController::class, 'portoflio'])->name('pages.portfolio-details');



//doctor
Route::get('/index', [DoctorController::class, 'index'])->name('pages.index');
Route::get('/index1', [DoctorController::class, 'index1'])->name('contact.index');
Route::get('/create', [DoctorController::class, 'create'])->name('doctor.create');
Route::post('/doctorCreate', [DoctorController::class, 'doctorCreate'])->name('doctorCreate');
Route::post('/message', [DoctorController::class, 'message'])->name('message');
Route::get('/delete/{id}', [DoctorController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [DoctorController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [DoctorController::class, 'update'])->name('update');
Route::get('/home1', [DoctorController::class, 'home1'])->name('pages.home');


//service
Route::get('/index2', [ServiceController::class, 'index2'])->name('service.index');
Route::get('/create1', [ServiceController::class, 'create1'])->name('service.create');
Route::post('/servicecreate', [ServiceController::class, 'servicecreate'])->name('servicecreate');
Route::get('/delete/{id}', [ServiceController::class, 'delete1'])->name('delete');



