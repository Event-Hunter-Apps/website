<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
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
    return view('template.master');
});




Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    
    Route::get('/register', function () {
        return view('register');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('landingPage');
    });
    
    Route::get('/event', [EventController::class, 'index']);
    
    Route::get('/checkout', function () {
        return view('checkout');
    });
    
    Route::get('/cart', function () {
        return view('cart');
    });
    
    Route::get('/category', function () {
        return view('category');
    });
    
    Route::get('/edit', function () {
        return view('editwisata');
    });
    
    Route::get('/add', function () {
        return view('tambahwisata');
    });

    Route::get('/add2', function () {
        return view('tambahwisata2');
    });
    
    Route::get('/detailEvent', function () {
        return view('detailevent');
    });
});

Route::get('/admin/home', function() {
    return view('admin2.home');
});
Route::get('/admin/events', function() {
    return view('admin2.event');
});
Route::get('/admin/users', function() {
    return view('admin2.users');
});
Route::get('/admin/cities', function() {
    return view('admin2.cities');
});

Route::get('/admin/sidebar', function() {
    return view('admin.sidebar');
});


Route::controller(CityController::class)->prefix("/admin/cities")->group( function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/create', 'store');
    Route::get('/{id}', 'show');
    Route::get('/{id}/edit', 'edit');
    Route::put('/{id}/update', 'update');
    Route::delete('/{id}', 'destroy');
});

Route::controller(EventController::class)->prefix("/admin/events")->group( function () {
    Route::get('/', 'indexAdmin');
    Route::get('/create', 'create');
    Route::post('/create', 'store');
    Route::get('/{id}', 'showAdmin');
    Route::get('/{id}/edit', 'edit');
    Route::put('/{id}/update', 'update');
    Route::delete('/{id}', 'destroy');
});