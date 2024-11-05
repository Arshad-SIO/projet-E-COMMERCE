<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function commande() {
		return "Page de panier quand on décide de passer la commande" ;
	}
	
	public function paiement() {
		return "Page de paiement" ;
	}
}
