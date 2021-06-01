<?php

use App\Http\Controllers\informationController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
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
    return view('welcome');
});

Route::middleware([Authenticate::class])->group(
    function() {
        Route::get('/dashboard', function(){
            return view('dashboard');
        })->name('dashboard');





Route::prefix('information')->group(function(){


    Route::get('view',[informationController::class,'view'])->name('view.information');
    Route::get('add',[informationController::class,'add'])->name('add.information');
    Route::post('store',[informationController::class,'store'])->name('store.information');
    Route::post('update/{id}',[informationController::class,'update'])->name('update.information');
    Route::get('delete/{id}',[informationController::class,'delete'])->name('delete.information');
    Route::get('edit/{id}',[informationController::class,'edit'])->name('edit.information');



});

});
