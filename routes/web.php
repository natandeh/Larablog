<?php

use App\Http\Controllers\Auth\Authcontroler;
use App\Http\Controllers\Blog\Blogcontroller;
use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/a', [Authcontroler::class,'showAcceuil'])->name('index');
Route::get('/bloge', [Blogcontroller::class,'index'])->name('blog.index');
Route::get('/formations', [Blogcontroller::class, 'showFormation'])->name('formation.page');
Route::get('/contact', [Authcontroler::class,'showContact'])->name('contact.page');
//Route::get('/', [Blogcontroller::class,'index'])->name('index');
//Route::post('/connexion', [Authcontroler::class,'login']);
Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', [DashController::class, 'showDashboard'])->name('dashb.page');
    Route::get('/dashquest', [DashController::class, 'afficheDashquest'])->name('dash.quest');
    Route::get('/dashtemoin', [DashController::class, 'afficheDashtemoin'])->name('dash.temoin');
    //Route::get('/register', [Authcontroler::class,'showRegister'])->name('blog.inscription');
    Route::get('/register', [Authcontroler::class,'showRegister'])->middleware('superadmin')->name('register');
    //Route CRUD temoignage
    Route::get('/temoignage', [DashController::class, 'afficheformtemoignage'])->name('temoignage');
    Route::post('/formtemoin', [DashController::class, 'formtemoin'])->name('forms.temoin');
    Route::get('/modifier-temoignage/{id}',[DashController::class, 'formModiftemoignage'] )->name('modifier.temoignage');
    Route::post('/Modiftemoin', [DashController::class, 'Modiftemoin'])->name('modif.temoin');
    Route::get('/supprimer-temoignage/{id}',[DashController::class, 'Suptemoignage'] )->name('supprimer.temoignage');
    //Route newsletters
    Route::get('/newsletters', [DashController::class, 'afficheNewletters'])->name('dashnewsletters');
    //Route liste admins
    Route::get('/listeadmin', [DashController::class, 'afficherAdmin'])->name('dashadmin');
    //Route ajout de blog
    Route::get('/addblog', [DashController::class, 'adblog'])->name('ajout.blog');
    Route::post('/addblog', [DashController::class, 'adblogpost'])->name('ajoutpost.blog');
});
Route::get('/connexion', [Authcontroler::class,'showLogin'])->name('blog.connexion');
//Route::post('/register', [Authcontroler::class,'register']);
//Route::get('/inscription-admin', [DashController::class, 'showAccount'])->name('dashboard.page');
//Route::get('/connexion-admin', [DashController::class, 'showLogindash'])->name('dashbo.co');
//Route pour connexion/inscription Administrateur
Route::get('/connexion-adminstrateur', [Authcontroler::class, 'loginDash'])->name('dashbo.page');
Route::get('/inscription-administrateur', [Authcontroler::class, 'registerAdmin'])->name('admin.registrer');
//Routes du projet
Route::get('/', [Authcontroler::class,'afficheIndex'])->name('index');
Route::get('/service1',[Authcontroler::class,'afficheService1'] )->name('service1');
Route::get('/service2',[Authcontroler::class,'afficheService2'] )->name('service2');
Route::get('/service3',[Authcontroler::class,'afficheService3'] )->name('service3');
Route::get('/service4',[Authcontroler::class,'afficheService4'] )->name('service4');
//Route du blog
Route::get('/blog',[Authcontroler::class,'afficheBlog'] )->name('blog');
Route::get('/blogcontent',[Authcontroler::class,'afficheContenuBlog'] )->name('blog.content');
//Routes DASHBOARD

//Route CRUD question
Route::get('/question', [DashController::class, 'afficheformquest'])->name('question');
Route::post('/formsquest', [DashController::class, 'formsquest'])->name('forms.quest');
Route::get('/modifier-question/{id}',[DashController::class, 'formModifquest'] )->name('modifier.question');
Route::post('/Modifquest', [DashController::class, 'Modifquest'])->name('modif.quest');
Route::get('/supprimer-question/{id}',[DashController::class, 'Supquest'] )->name('supprimer.question');


require __DIR__.'/auth.php';
