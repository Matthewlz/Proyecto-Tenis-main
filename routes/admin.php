<?php

use App\Http\Controllers\Admin\AdminActivitats;
use App\Http\Controllers\Admin\AdminActivitatsApartat;
use App\Http\Controllers\Admin\AdminActivitatsCasal;
use App\Http\Controllers\Admin\AdminActivitatsExtre;
use App\Http\Controllers\Admin\AdminActivitatsOpcio;
use App\Http\Controllers\Admin\AdminFillsController;
use App\Http\Controllers\Admin\AdminGalleryControler;
use App\Http\Controllers\Admin\AdminRestaurantPlats;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\AdminRestaurantSeccioController;
use App\Http\Controllers\ContrasenyaController;


/**
 * En aquesta ruta es la ruta on no utilitzarem plantilles ni tags pero si components livewire on contenen components de front amb els seus propis controlados
 * es a dir tindran el seu controlador y una vista a part he separat aquesta secció ja que implemento una plantilla de administració per administrar
 * el dashboard de usuaris y el admin on es completament diferent de la web on sorgira només la informació cara el client
 */
/**
 * en els metodes only sera on només acceptem del resource aquets metodes inserits en el only es a dir que per defecte el resource ens obliga implementar
 * uns metodes amb ->only podem reduir els metodes
 */
// en el resource fas referencia amb la ruta admin.users.index y ja esta fet de manera que entres directament a index no fa falta posarlo ja que son els metodes
// de resource per defecte
Route::get('',[HomeController::class,'index']);
Route::resource('tasks',TaskController::class);
Route::resource('users',UserController::class)->only('index','show','edit','destroy','update')->names('admin.users');
Route::resource('perfil',ProfileController::class)->names('admin.perfil');
Route::resource('fills',AdminFillsController::class)->names('admin.fills');
Route::resource('galeria',AdminGalleryControler::class)->names('admin.galeria');
Route::resource('seccio',AdminRestaurantSeccioController::class)->names('admin.seccio');
Route::resource('plats',AdminRestaurantPlats::class)->names('admin.plats');
Route::resource('activitats',AdminActivitats::class)->names('admin.activitats');
Route::resource('casal',AdminActivitatsCasal::class)->names('admin.casal');
Route::resource('opcio',AdminActivitatsOpcio::class)->names('admin.opcio');

// en canvi en el prefix si haurem de ficar el metode que fa referencia per defecte
Route::prefix('contrasenya')->group(function () {
   Route::get('/edit', [ContrasenyaController::class, 'edit'])->name('contrasenya.edit');
  

});

Route::prefix('apartat')->group(function () {
   Route::get('/{identificador}', [AdminActivitatsApartat::class, 'index'])->name('apartat.index');
   Route::get('/create/{identificador}', [AdminActivitatsApartat::class, 'create'])->name('apartat.create');
   Route::post('/edit', [AdminActivitatsApartat::class, 'edit'])->name('apartat.edit');
   Route::post('/delete', [AdminActivitatsApartat::class, 'delete'])->name('apartat.delete');

});
Route::prefix('extra')->group(function () {
   Route::get('/', [AdminActivitatsExtre::class, 'index'])->name('extra.index');
   Route::get('/create', [AdminActivitatsExtre::class, 'create'])->name('extra.create');
   Route::post('/edit', [AdminActivitatsExtre::class, 'edit'])->name('extra.edit');
   Route::post('/delete', [AdminActivitatsExtre::class, 'delete'])->name('extra.delete');

});



