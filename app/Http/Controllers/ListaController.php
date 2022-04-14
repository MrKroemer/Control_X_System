<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ListaController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function lista(){
        
        return '<h2 style="color:white; background-color:blue; font-weight:bold; width:30%;">Rotas destinadas a listagens</h2>';
    }

}



