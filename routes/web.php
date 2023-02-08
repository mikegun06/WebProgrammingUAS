<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SavedController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdateRoleController;
use App\Http\Controllers\ShowProfileController;
use App\Http\Controllers\ManageProductController;
use App\Http\Controllers\AccountMaintenanceController;

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


Route::get('/HomeUser/{lang}',[HomeController::class, 'ShowProductUser']);


Route::get('/Login', function () {
    return view('Login',[]);
});


Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('index');
});

Route::get('/Login',[LoginController::class, 'index'])->middleware('guest');
Route::post('/Login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/Register/{lang}',[RegisterController::class, 'index'])->middleware('guest');;
Route::post('/Register',[RegisterController::class, 'store']);

Route::get('/Profile/{lang}',[ShowProfileController::class, 'showProfile']);
Route::patch('/Profile/action/Profile',[ShowProfileController::class, 'updateProfile']);

Route::get('/ProductDetailCustomer/{Number}',[HomeController::class, 'ShowDetailCustomer']);

Route::get('/CartPage/{lang}',[CartController::class, 'CartShow']);

Route::get('/Success/{lang}',[SuccessController::class, 'index']);

Route::get('/Saved/{lang}',[SavedController::class, 'Index']);



Route::get('/LogOut', [LogOutController::class, 'Index']);

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/Home/{lang}',[HomeController::class, 'ShowProduct']);
    Route::get('/ProfileAdmin/{lang}',[ShowProfileController::class, 'showProfileAdmin']);
    Route::patch('/ProfileAdmin/action/ProfileAdmin',[ShowProfileController::class, 'updateProfile']);
    Route::get('/AddProduct/{lang}',[ProductController::class, 'index']);
    Route::post('/AddProduct',[ProductController::class, 'NewProduct']);
    Route::get('/ManageProduct/{lang}',[ManageProductController::class, 'index']);
    Route::get('/ManageProduct/{lang}/{id}',[ManageProductController::class, 'destroy']);
    Route::get('/Update/{id}',[ManageProductController::class, 'show']);
    Route::patch('action/update/{id}',[ManageProductController::class, 'update'])->name('Product.updateData');
    Route::get('/ProductDetailAdmin/{Number}',[HomeController::class, 'ShowDetailAdmin']);
    Route::get('/CartPageAdmin/{lang}',[CartController::class, 'CartShowAdmin']);
    Route::get('/AccountMaintenance/{lang}',[AccountMaintenanceController::class, 'showProfile']);
    Route::get('action/DeleteRole/{id}',[AccountMaintenanceController::class, 'destroy']);
    Route::get('/UpdateRole/{id}', [UpdateRoleController::class, 'showRole']);
    Route::patch('action/UpdateRole/{id}',[UpdateRoleController::class, 'update']);

});
