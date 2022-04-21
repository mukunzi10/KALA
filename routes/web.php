<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoyalController;
use App\Http\Controllers\LoyalsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\CremesController;
use App\Http\Controllers\CitizeController;
use App\Http\Controllers\CitizenControlle;
use App\Http\Controllers\PostControlle;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PaymentController;


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

Route::get('/', [Index::class, 'index'])->name('index');

//Route::group(['middleware' =>['auth']],function(){






//});

//Route::get('/index', [Index::class, 'index'])->name('index');
Route::get('/about', [Index::class, 'about'])->name('about');
Route::get('/services', [Index::class, 'services'])->name('services');
Route::get('/team', [Index::class, 'team'])->name('team');
Route::get('/contact', [Index::class, 'contact'])->name('contact');
//Route::get('/post', [Index::class, 'gg'])->name('post');
Route::resource('post', PostControlle::class);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login1', [MainController::class,'index'])->name('log');
Route::get('/reg', [MainController::class,'registration'])->name('reg');
Route::post('/from', [MainController::class,'save'])->name('from');
Route::post('/autha', [MainController::class,'check'])->name('autha');
//Route::get('/dashboarde',[MainController::class,'dashboard'])->name('dashborde');
Route::get('/l0gout',[MainController::class,'logout'])->name('l0gout');

Route::group(['middleware'=>['checkAuth']],function() {
    Route::get('/login1', [MainController::class,'index'])->name('log');
    Route::get('/reg', [MainController::class,'registration'])->name('reg');
    ///////////////////////////////

    Route::get('/loyal',[LoyalController::class,'index'])->name('loyal');
    Route::get('/layal',[LoyalController::class,'loyalreView'])->name('layal');
    Route::post('registration',[LoyalController::class,'store'])->name('registrition');
    Route::get('/report',[LoyalController::class,'view'])->name('report');
    /////////////////////////////////////////////////////////////////////////////
    Route::get('/citizen',[CitizenController::class,'index'])->name('citizen');
    Route::post('/registe',[CitizenController::class,'store'])->name('registe');
    Route::get('/citizn',[CitizenController::class,'view'])->name('citizn');
    Route::get('/citizen',[CitizenController::class,'index'])->name('citizen');
    Route::post('/registe',[CitizenController::class,'store'])->name('registe');
    Route::get('/edit/{cit_id}',[CitizenController::class,'edit']);
    /////////////////////////////////////////////////////////////////////////////
    Route::get('/testmony',[CremesController::class,'index'])->name('cremes');
    Route::get('/cRegistratio',[CremesController::class,'create'])->name('cRegistratio');
    Route::get('/testmony',[CremesController::class,'index'])->name('cremes');
    Route::post('/ cRegistration',[CremesController::class,'store'])->name('cRegistration');
    Route::get('show1/{id}',[CremesController::class,'show'])->name('show1a');
    Route::get('admin/{id}',[CitizenController::class,'edit'])->name('admin');
    /////////////////////////////////////////////////////////////////////////////////
    Route::get('/dashboardee',[MainController::class,'dashboard'])->name('dashboardee');
    Route::resource('citizena',CitizenControlle::class);
    Route::resource('loyalss',LoyalsController::class);
    ////////////////////////////////

});

//Route::resource('admin', CitizeController::class);
Route::get('/more',[Index::class,'more'])->name('more');



Route::get('/login', [LoginController::class, 'form'])->name('form1');
Route::post('/form', [LoginController::class, 'login'])->name('form');
Route::any ('payment-page',[PaymentController::class,'index']);
Route::any ('payment-verify',[PaymentController::class,'verify']);


