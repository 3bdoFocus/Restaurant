<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

/**              User Page           **/

// Home Page
Route::get('/', [HomeController::class, 'index']);
// Admin Dashbord Page
Route::get('/redirects', [HomeController::class, 'redirects']);
// Users Table [Fetch Data]
Route::get('/users', [AdminController::class, 'users']);
// Delete From Table
Route::get('/delete/{id}', [AdminController::class, 'delete']);
// Foodmenu page
Route::get('/deletemenu/{id}', [AdminController::class, 'delmenu']);
/**************************************************************** */

/**            FoodMenu Page              **/

// Food Page
Route::get('/foodmenu', [AdminController::class, 'foodmenu']);
// Form In Food Page
Route::post('/uploadfood', [AdminController::class, 'upload']);
// Edit Page
Route::get('edit/{id}', [AdminController::class, 'edit']);
// Update Page
Route::post('update/{id}', [AdminController::class, 'update']);
// Add Reservation Table From Home Page
Route::post('/add', [AdminController::class, 'reservation']);

/*************************************************************************** */
/** Admin Reservation **/
Route::get('/reservation', [AdminController::class, 'reservpage']);

/********************************************* */

// AdminChef Page
Route::get('/adminchefs', [AdminController::class, 'adminchefs']);
// Form in adminchef
Route::post('/uploadchef', [AdminController::class, 'uploadChef']);
// Table in adminchef
Route::get('/updatechef/{id}', [AdminController::class, 'updateChef']);
// Form in Update Chef Page
Route::post('/upchef/{id}', [AdminController::class, 'upChef']);
// Delete Chef
Route::get('deletechef/{id}', [AdminController::class, 'delChef']);

/********************************************************* */

// Food Page Add Cart In Home Page
Route::post('/addcart', [HomeController::class, 'addCart']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
