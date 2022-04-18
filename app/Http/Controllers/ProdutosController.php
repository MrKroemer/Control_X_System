<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ProdutosController extends Controller
{

       public function __construct(){
    
              $this->middleware('auth');
       }

       public function produtos(){
    
              $produtos = DB::select('select * from produtos');

              $estilos = '<style>'
                        . '.td 
                        {
                            color:blue;
                        }'
                        .'</style>';

              $html = '<h2 style="background-color: blue; color: white; font-wigth:bold; width:32.5%; text-align:center;">Configuração de rotas para os produtos</h2>';

              $html .= '<table style="border: 1px solid black;">'
                    .  '<th style="font-weight: bold; color:blue; border: 1px solid black; text-align:center;"> Nome'      . '</th>'
                    .  '<th style="font-weight: bold; color:blue; border: 1px solid black; text-align:center;"> Descrição' . '</th>'
                    .  '<th style="color:blue; border: 1px solid black; text-align:center;"> Quantidade em estoque'        . '</th>';
              

              foreach($produtos as $produto){
             
                     
             $html  .= '<tr>' . '<td style="color:blue; border:1px solid black; text-align: center;">' . $produto->nome       . '</td>'
                    .  '<td style="color:blue; border:1px solid black; text-align: center;">' . $produto->descricao           . '</td>'
                    .  '<td style="color:blue; border:1px solid black; text-align: center;">' . $produto-> quantidade_estoque . '</td>'
                    .  '</tr>';
                     

              }

             $html .= '</table>';

             return $html;
             //return '<h2>Pegando a rota a partir um método dentro de uma classe</h2>';
       }

  }

?>