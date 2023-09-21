<?php

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
    return view('base');
});
Route::get('/entreprise', function () {
    return view('entreprise');
})->name('entreprise');
Route::get('/transit', function () {
    return view('transit');
})->name('transit');
Route::get('/voyage', function () {
    return view('voyage');
})->name('voyage');
Route::get('/camion', function () {
    return view('camion');
})->name('camion');
Route::get('/model', function () {
    return view('model');
})->name('model');
Route::get('/voyager', function () {
    return view('voyager');
})->name('voyager');
Route::get('/facture', function () {
    return view('facture');
})->name('facture');
Route::get('/carte_gasoil', function () {
    return view('carte_gasoil');
})->name('carte_gasoil');
Route::get('/tarif', function () {
    return view('tarif');
})->name('tarif');
Route::get('/payer', function () {
    return view('payer');
})->name('payer');
Route::get('/payement_bon', function () {
    return view('bon');
})->name('bon');
Route::get('/payment_traite', function () {
    return view('traite');
})->name('traite');
Route::get('/payment_cheque', function () {
    return view('cheque');
})->name('cheque');
Route::get('/tranche', function () {
    return view('tranche');
})->name('tranche');
Route::get('/depense', function () {
    return view('depense');
})->name('depense');
Route::get('/autre_consomation', function () {
    return view('autre');
})->name('autre');
Route::get('/attachement', function () {
    return view('attachement');
})->name('attachement');
Route::get('/norme', function () {
    return view('norme');
})->name('norme');
Route::get('/associe', function () {
    return view('associe');
})->name('associe');
