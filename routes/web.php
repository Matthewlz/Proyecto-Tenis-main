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
/**
 * Aquesta sera la primera web de rutas on no utilitzarem el component livewire de laravel que es el front de php aqui utilitzarem en cada una de les
 * vistes tags on implementarem el navarplantilla on portara per defecte la capçelera de la web y amb altres tags en cada vista engancharem el cos corresponent
 * 
 */


/**
 * ->name fa referencia a la ruta que fem referencia desde un {{route}}
 *  prefix sera el prefix que apareix el navegador seguit de /tennis || /padel || casal etc en el cas de {activitat} en el route pasem el parametre
 *  
 */
Route::get('/', HomeController::class)->name('/');

Route::group(['prefix' => 'activitats',  'middleware' => 'auth'], function () {
  Route::get('{activitat}', [ActivitatController::class, 'index'])->name('activitats.index');
  Route::get('tennis', [ActivitatController::class, 'tennis'])->name('activitats.tennis');
  Route::get('paddel', [ActivitatController::class, 'paddel'])->name('activitats.paddel');
  Route::get('casal', [ActivitatController::class, 'casal'])->name('activitats.casal');
  Route::post('inscriure', [ActivitatController::class, 'inscriure'])->name('activitats.inscriure');
});

Route::get('contactens', [ContactensController::class, 'index'])->name('contactens.index');
Route::post('contactens', [ContactensController::class, 'store'])->name('contactens.store');
Route::get('soci', [SociController::class, 'index'])->name('soci.index');
Route::resource('restaurant', RestaurantController::class)->names('restaurant');
Route::resource('galeria', GalleryController::class)->names('galeria');
Route::resource('botiga', BotigaController::class)->names('botiga');


// funcio que comproba que hagis iniciat sessió abans de entrar en el dasboard i els seus subApartats
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  /* return view('dashboard');*/
  return redirect('/admin');
})->name('dashboard');
