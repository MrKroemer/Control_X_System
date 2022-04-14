<?php
namespace App\Http\Controllers;


class AtividadesController extends Controller
{

 public function  __construct()
 {
     return $this->middleware('auth');
 }


 public function atividades(){


return '<h2 style="font-weight:bold; color:white; background-color:blue; width:25%;">Rotas para o módulo de atividades</h2>'; 


 }




}