<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController ;
use App\Http\Controllers\ProduitController ;
use App\Http\Controllers\PanierController ;

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
    return "Projet E-COMMERCE";
});

Route::get('/clients/connexion', [ ClientController::class, 'connexion' ] ) ;

Route::get('/clients/deconnexion', [ ClientController::class, 'deconnexion' ] ) ;

Route::get('/clients/panier', [ ClientController::class, 'panier' ] ) ;

Route::get('/produits', [ ProduitController::class, 'produit' ] ) ;

Route::get('/produits/description', [ ProduitController::class, 'description' ] ) ;

Route::get('/produits/panier', [ ProduitController::class, 'panier' ] ) ;

Route::get('/panier/commande', [ PanierController::class, 'commande' ] ) ;

Route::get('/panier/commande/connexion/paiement', [ PanierController::class, 'paiement' ] ) ;
