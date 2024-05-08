<?php

use App\Http\Controllers\{
    SiteController,
    ProductController
};
use Illuminate\Support\Facades\Route;


Route::get('/login', [SiteController::class, 'login'])->name('login');
Route::get('/login_internauta', [SiteController::class, 'login'])->name('login_site');

///Site
Route::get('/', [ProductController::class, 'nft'])->name('home');

//Tela dos NFT's
Route::get('/nft/show/{id?}', [ProductController::class, 'show'])->name('ntf.show');

//Tela de Login do Internauta
Route::get('/login_internauta', [SiteController::class, 'login'])->name('login_site');
Route::post('/logar', [SiteController::class, 'store'])->name('logar');
Route::get('/cadastro', [SiteController::class,'cadastro'])->name('site.cadastro');
Route::post('/cadastro', [SiteController::class,'cadastroStore'])->name('cadastro.store');

Route::middleware('auth')->group(function () {

    Route::get('/usuario-index', [SiteController::class, 'usuario'])->name('usuario.index');
    
    Route::post('/cadastroEditar', [SiteController::class,'updateCadastro'])->name('cadastro.update');

    Route::get('/home_site', [SiteController::class, 'home'])->name('home_site.index');
    Route::get('/logout_site', [SiteController::class, 'logout'])->name('logout_site');

    Route::get('/ranking', [SiteController::class, 'ranking'])->name('ranking');
    Route::get('/entregas_user', [SiteController::class, 'entregas_user'])->name('entregas_user');
    Route::get('/categorizar', [SiteController::class, 'categorizar'])->name('categorizar');

    // NFT
    Route::get('/nft_index', [SiteController::class, 'nftCriar'])->name('nft.criar');
    Route::post('/nft_criar', [SiteController::class, 'nftStore'])->name('nft.Store');

});