<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

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
})->name('welcome');
/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    /*
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    */
    Route::get('/dashboard', [HomeController::class, 'dashboard'])
        ->name('dashboard')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('Dashboard'), route('dashboard'));
        });

    Route::get('/test', [HomeController::class, 'test'])
        ->name('test')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('dashboard')->push(__('Test'), route('test'));
        });
});

/*
 * Sample Breadcrumb
 * Route::get('/', [HomeController::class, 'index'])
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('frontend.index'));
    });
 */
