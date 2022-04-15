<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserController;
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
    return redirect('/login');
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
    Route::get('/home', [HomePageController::class, 'homepage']);
    
    Route::get('/events', [EventController::class, 'index']);
    Route::get('/events/{id}', [EventController::class, 'show']);
    Route::get('/events/{id}/tikets', [EventController::class, 'tiket']);
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
        return view('admin2.formEvent');
    });
    
    Route::get('/detailEvent', function () {
        return view('detailevent');
    });
});

Route::controller(CityController::class)->prefix("/admin/cities")->group( function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/create', 'store');
    Route::get('/{id}', 'show');
    Route::get('/{id}/edit', 'edit');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});

Route::controller(EventController::class)->prefix("/admin/events")->group( function () {
    Route::get('/', 'indexAdmin');
    Route::get('/create', 'create');
    Route::post('/create', 'store');
    Route::get('/{id}', 'showAdmin');
    Route::get('/{id}/edit', 'edit');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
    
});

Route::controller(TiketController::class)->prefix("/admin/events/{event_id}/tikets")->group( function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/create', 'store');
    Route::get('/{tiket_id}', 'show');
    Route::get('/{tiket_id}/edit', 'edit');
    Route::put('/{tiket_id}', 'update');
    Route::delete('/{tiket_id}', 'destroy');
});

Route::controller(CategoryController::class)->prefix("admin/categories")->group( function() {
    Route::post('/create', 'store');
});

Route::controller(UserController::class)->prefix("admin/users")->group( function() {
    Route::get('/', 'index');
});