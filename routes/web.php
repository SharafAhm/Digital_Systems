<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Supervisor\SupervisorController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [HomeController::class, 'index']);
Route::view('/about-us', 'about');  // You need to create an `about.blade.php`
Route::view('/contact', 'contact'); // You need to create a `contact.blade.php`


Route::get('/services', [ServiceController::class, 'index']);



// Authentication Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Registration routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//Route::middleware(['auth', 'admin'])->group(function () {
//    Route::get('/admin/dashboard', function () {
//        return view('admin.dashboard');
//    });
//});

//Route::middleware(['auth', 'supervisor'])->group(function () {
//    Route::get('/supervisor/dashboard', function () {
//        return view('supervisor.dashboard');
//    });
//});

Route::middleware(['customAuth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
        Route::get('/admin/tasks', [TaskController::class, 'index'])->name('tasks.index');
    });
});

Route::middleware(['customAuth'])->group(function () {
    Route::get('/supervisor/dashboard', function () {
        return view('supervisor.dashboard');
    });
});

Route::middleware(['customAuth'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    });
});

 // Import your controller at the top

// Define a POST route for the form submission
Route::post('/submit-form', [ServiceController::class, 'store'])->name('form.submit');
