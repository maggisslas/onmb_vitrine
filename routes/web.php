<?php

use App\Http\Controllers\ActeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MembreController;
use Illuminate\Support\Facades\Route;

require_once 'auth.php';



Route::get('/', function () { return view('index'); })->name('home');

Route::prefix('ordre')->name('ordre.')->group(function(){

    Route::get('/presentation', function () { return view('pages.onmb.presentation'); })->name('presentation');
    Route::get('/fonctionnement', function () { return view('pages.onmb.fonctionnement'); })->name('fonctionnement');
    Route::get('/conseil_national', function () { return view('pages.onmb.conseil_national'); })->name('conseil_national');
    Route::get('/conseil_departemental', function () { return view('pages.onmb.conseil_departemental'); })->name('conseil_departemental');
    Route::get('/code_deontologie', function () { return view('pages.onmb.code_deontologie'); })->name('code_deontologie');
    // Route::get('/actes_autorisations', function () { return view('pages.onmb.actes_autorisations'); })->name('actes_autorisations');
    Route::get('/actes_autorisations', [ActeController::class , 'index'])->name('actes_autorisations');
    Route::get('/actes_autorisations/search/{category?}', [ActeController::class , 'search'])->name('actes_autorisations.search');
    Route::get('/historique', function () { return view('pages.onmb.historique'); })->name('historique');

});

Route::prefix('medecins')->name('medecins.')->group(function(){

    Route::get('/liste_medecins/{type?}', [MembreController::class , 'liste_membres'])->name('liste_medecins');
    Route::get('/cotisation_ordinale', function () { return view('pages.medecins.cotisation_ordinale'); })->name('cotisation_ordinale');
    Route::get('/offres_emploie', function () { return view('pages.medecins.offres_emploie'); })->name('offres_emploie');

});

Route::prefix('publications')->name('publications.')->group(function(){

    // Route::get('/actualites', function () { return view('pages.publications.actualites'); })->name('actualites');
    // Route::get('/bulletin', function () { return view('pages.publications.bulletin'); })->name('bulletin');
    // Route::get('/communications', function () { return view('pages.publications.communications'); })->name('communications');
    // Route::get('/rapport', function () { return view('pages.publications.rapport'); })->name('rapport');
    // Route::get('/recommandation', function () { return view('pages.publications.recommandation'); })->name('recommandation');

    Route::get('/{category}', [BlogController::class , 'index'])->name('index');
    Route::get('/{id}/details/{slug}', [BlogController::class , 'show'])->name('show');

});

Route::get('/contact', function () { return view('pages.contact'); })->name('contact');

require_once 'admin.php';
