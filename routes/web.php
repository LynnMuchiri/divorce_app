<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\DashboardRedirect;


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

Route::get('/client/client_register', function () {
    return view('client.client_register');
})->name('client.register.page');

Route::post('/client/client_register', [ClientController::class, 'create'])->name('client.register');
Route::post('/clients', [ClientController::class, 'store'])->name('client.store');


Route::get('/lawyer/lawyer_dashboard', function () {
    return view('lawyer.lawyer_dashboard');
})->name('lawyer_dashboard');


Route::get('/lawyer/lawyer_register', function () {
    return view('lawyer.lawyer_register');
})->name('lawyer.register.page');

Route::post('/lawyer/lawyer_register', [LawyerController::class, 'create'])->name('lawyer.register');
Route::post('/lawyers', [LawyerController::class, 'store'])->name('lawyer.store');


Route::get('/client/client_dashboard', function () {
    return view('client.client_dashboard');
})->name('client_dashboard');

Route::get('/client/upload', [PageController::class, 'upload']);
Route::post('/uploadFile', [PageController::class, 'uploadFile'])->name('uploadFile');


Route::get('/dashboard', [DashboardRedirect::class, 'dashboards'])
    ->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin'], function () {
    // View lawyers
    Route::get('/lawyer', 'AdminController@viewLawyers')->name('admin.lawyer.index');


    // Create a lawyer
    Route::get('/lawyer/create', 'AdminController@createLawyer')->name('admin.lawyer.create');
    Route::post('/lawyers', 'AdminController@storeLawyer')->name('admin.lawyer.store');

    // Update a lawyer
    Route::get('/lawyer/{lawyer}/edit', 'AdminController@editLawyer')->name('admin.lawyer.edit');
    Route::post('/lawyer/{lawyer}', 'AdminController@updateLawyer')->name('admin.lawyers.update');

    // Delete a lawyer
    Route::delete('/lawyer/{lawyer}', 'AdminController@destroyLawyer')->name('admin.lawyer.destroy');

    // View clients
    Route::get('/client', 'AdminController@viewClients')->name('admin.client.index');

    // Create a client
    Route::get('/client/create', 'AdminController@createClient')->name('admin.client.create');
    Route::post('/client', 'AdminController@storeClient')->name('admin.client.store');

    // Update a client
    Route::get('/client/{client}/edit', 'AdminController@editClient')->name('admin.client.edit');
    Route::put('/client/{client}', 'AdminController@updateClient')->name('admin.client.update');
});

// Route::controller(LawyerController::class)->prefix('lawyer')->group(function (){
//     Route::get('','index')->name('lawyers');
//     Route::get('create','create')->name('lawyer.create');
//     Route::post('store','store')->name('lawyer.store');
//     Route::get('show/{id}','show')->name('lawyer.show');
//     Route::get('edit/{id}','edit')->name('lawyer.edit');
//     Route::put('edit/{id}','update')->name('lawyer.update');
//     Route::delete('destroy/{id}','destroy')->name('lawyer.destroy');

// });

// Route::controller(ClientController::class)->prefix('client')->group(function (){
//     Route::get('','index')->name('clients');
//     Route::get('create','create')->name('client.create');
//     Route::post('store','store')->name('client.store');
//     Route::get('show/{id}','show')->name('client.show');
//     Route::get('edit/{id}','edit')->name('client.edit');
//     Route::put('edit/{id}','update')->name('client.update');
//     Route::delete('destroy/{id}','destroy')->name('client.destroy');
// });



require __DIR__.'/auth.php';
