<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;



class AlmoxarifadoController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }


    public function almoxarifado(){


        $almoxarifado =  DB::select('select * from almoxarifado');

        $html = '<h2 style="background-color:blue; color: white; font-wight:bold; width:25%;">Rota para o módulo do almoxarifado</h2>';
        $html .= '<ul>';
        foreach($almoxarifado as $almox){
            $html .= '<li> Nome: ' . $almox->nome . '</li>';
            $html .= '<li> Fornecedor: ' . $almox->fornecedores . '</li>';

        }

        $html .= '</ul>';
        return $html;

    }


}