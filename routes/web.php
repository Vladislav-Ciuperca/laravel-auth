<?php

use App\Models\Project;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController; //<---- Import del controller precedentemente creato!
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\admin\TechnologyController;
use App\Http\Controllers\Admin\TecnologyController;
use App\Http\Controllers\Admin\TypeController;

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





Route::get('/mailable',function () {

    $lead = App\Models\invoice::find(1);

    return new App\Models\invoicePaid($invoice);

});




Route::middleware(['auth'])
    ->prefix('admin') //definisce il prefisso "admin/" per le rotte di questo gruppo
    ->name('admin.') //definisce il pattern con cui generare i nomi delle rotte cioè "admin.qualcosa"
    ->group(function () {
// gh
        //Siamo nel gruppo quindi:
        // - il percorso "/" diventa "admin/"
        // - il nome della rotta ->name("dashboard") diventa ->name("admin.dashboard")
        Route::resource('/projects', ProjectController::class);

        Route::resource('/types', TypeController::class);
        Route::resource('/technologies', TechnologyController::class);

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });

require __DIR__ . '/auth.php';
