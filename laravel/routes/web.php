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
    return "Projet E-COMMERCE";
});

Route::get('/clients/connexion', function () {
    return "Page de connexion";
});

Route::get('/clients/deconnexion', function () {
    return "Page de deconnexion";
});

Route::get('/clients/panier', function () {
	return "Page de panier";
});

Route::get('/produits', function () {
	return "Page liste des produits";
});

Route::get('/produits/description', function () {
	return "Page de la description de produit";
});

Route::get('/produits/panier', function () {
	return "Page de panier lorsqu’on choisit un produit";
});

Route::get('/panier/commande', function () {
	return "Page de panier quand on décide de passer la commande";
});

Route::get('/panier/commande/connexion/paiement', function () {
	return "Page de paiement";
});
