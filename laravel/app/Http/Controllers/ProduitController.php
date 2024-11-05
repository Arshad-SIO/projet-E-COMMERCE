<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function produit() {
		return "Page de liste des produits" ;
	}
	
	public function description() {
		return "Page des descriptions de produit" ;
	}
	
	public function panier() {
		return "Page de panier lorsqu’on choisit un produit" ;
	}
}
