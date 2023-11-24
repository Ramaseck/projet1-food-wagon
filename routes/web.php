<?php

use App\Http\Controllers\ControllerItems;
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

 Route::get('/', function () {
     return view('welcome');
 });
Route::get('/preview',function(){
    return view('../component/preview');
});
Route::get('/details',[ControllerItems::class, 'details']);
Route::post("/details/traitement", [ControllerItems::class,'store']);



/*Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
