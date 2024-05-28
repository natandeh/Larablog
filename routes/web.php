<?php

use App\Http\Controllers\Auth\Authcontroler;
use App\Http\Controllers\Blog\Blogcontroller;
use App\Http\Controllers\DashController;
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

Route::get('/', [Authcontroler::class,'showAcceuil'])->name('index');
Route::get('/blog', [Blogcontroller::class,'index'])->name('blog.index');
Route::get('/formations', [Blogcontroller::class, 'showFormation'])->name('formation.page');
Route::get('/contact', [Authcontroler::class,'showContact'])->name('contact.page');
//Route::get('/', [Blogcontroller::class,'index'])->name('index');
//Route::post('/connexion', [Authcontroler::class,'login']);
Route::get('/register', [Authcontroler::class,'showRegister'])->name('blog.inscription');
Route::get('/connexion', [Authcontroler::class,'showLogin'])->name('blog.connexion');
//Route::post('/register', [Authcontroler::class,'register']);
Route::get('/dashboard', [DashController::class, 'showDashboard'])->name('dashb.page');
//Route::get('/inscription-admin', [DashController::class, 'showAccount'])->name('dashboard.page');
//Route::get('/connexion-admin', [DashController::class, 'showLogindash'])->name('dashbo.co');
//Route pour connexion/inscription Administrateur
Route::get('/connexion-adminstrateur', [Authcontroler::class, 'loginDash'])->name('dashbo.page');
Route::get('/inscription-administrateur', [Authcontroler::class, 'registerAdmin'])->name('admin.registrer');

require __DIR__.'/auth.php';
