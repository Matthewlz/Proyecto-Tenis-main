<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivitatController;
use App\Http\Controllers\BotigaController;
use App\Http\Controllers\ContactensController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SociController;

use App\Http\Controllers\RestaurantController;


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



Route::get('/', HomeController::class)->name('/');

Route::group(['prefix' => 'activitats',  'middleware' => 'auth'], function () {
  Route::get('{activitat}', [ActivitatController::class, 'index'])->name('activitats.index');
  Route::get('tennis', [ActivitatController::class, 'tennis'])->name('activitats.tennis');
  Route::get('paddel', [ActivitatController::class, 'paddel'])->name('activitats.paddel');
  Route::get('casal', [ActivitatController::class, 'casal'])->name('activitats.casal');
});

Route::get('contactens', [ContactensController::class, 'index'])->name('contactens.index');
Route::post('contactens', [ContactensController::class, 'store'])->name('contactens.store');
Route::get('soci', [SociController::class, 'index'])->name('soci.index');
Route::resource('restaurant', RestaurantController::class)->names('restaurant');
Route::resource('galeria', GalleryController::class)->names('galeria');
Route::resource('botiga', BotigaController::class)->names('botiga');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  /* return view('dashboard');*/
  return redirect('/admin');
})->name('dashboard');
