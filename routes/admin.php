<?php

use App\Http\Controllers\Admin\ActesController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


// Routes after login
Route::group(['middleware' => ['auth']] , function(){

    Route::prefix('admin')->name('admin.')->group(function(){

        Route::get('/tableau-de-bord' , [DashboardController::class , 'index'])->name('dashboard');

        // Users
        Route::resource('users', UserController::class);

        Route::controller(UserController::class)->prefix('user')
                                                ->name('users.')
                                                ->group(function(){

            Route::get('/activer-ou-desactiver/{id}/{status}' , 'state')->name('state');

        });

        // Categories
        Route::resource('categories', CategoryController::class)->only('index','store','update', 'destroy');

        Route::get('/categories/search/select2' , [CategoryController::class, 'searchSelect2'])->name('categories.search.select2');
        Route::controller(CategoryController::class)->prefix('categories')
                                                ->name('categories.')
                                                ->group(function(){

            Route::get('/liste/categorie/{page?}' , 'getData')->name('get.data');
            Route::get('/activer-ou-desactiver/{id}/{status}' , 'state')->name('state');

        });


        // Articles
        Route::resource('articles', ArticleController::class)->only('index','store','update', 'destroy');

        Route::get('/articles/search/select2' , [ArticleController::class, 'searchSelect2'])->name('articles.search.select2');
        Route::controller(ArticleController::class)->prefix('articles')
                                                ->name('articles.')
                                                ->group(function(){

            Route::get('/liste' , 'getData')->name('get.data');
            Route::get('/activer-ou-desactiver/{id}/{status}' , 'state')->name('state');

        });

        // Actes & Autorisations
        Route::resource('actes', ActesController::class)->only('index','store','update', 'destroy');

        Route::get('/actes/search/select2' , [ActesController::class, 'searchSelect2'])->name('actes.search.select2');
        Route::controller(ActesController::class)->prefix('actes')
                                                ->name('actes.')
                                                ->group(function(){

            Route::get('/liste' , 'getData')->name('get.data');
            Route::get('/activer-ou-desactiver/{id}/{status}' , 'state')->name('state');

        });


    });


});
