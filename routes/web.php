<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Livewire\Admin\Users\ListUsers;
use App\Http\Livewire\Admin\Users\Pro;
use Illuminate\Support\Facades\Route;

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
Route::prefix('admin')->group(function()
{
    Route::get('dashboard',adminController::class)->name('admin.dashboard');
    Route::get('users',ListUsers::class)->name('admin.users');
   
   
 

});
    