<?php

namespace App\Http\Controllers;


class AnalisesLaboratoriaisController extends Controller
{

        public function __construct(){

            $this->middleware('auth');
            
        }

        public function data_analise($data_referencia){

            $data_referencia =  $this->data_referencia;

            if(! $data_referencia_referencia){
                $data_referencia =  $this->data_referencia;

            }

            return '<h3>Testre de retorno para data de referencia<h3>';

        }

}