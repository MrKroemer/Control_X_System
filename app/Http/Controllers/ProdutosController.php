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

              $html = '<h2 style="background-color: blue; color: white; font-wigth:bold; width:25%;">Configuração de rotas para os produtos</h2>';
              foreach($produtos as $produto){
              
                     $html .= '<ul>';
                     $html .= '<li style="font-weight: bold; color:blue;"> Nome -> ' . $produto->nome . '</li>';
                     $html .= '<li style="font-weight: bold; color:blue;"> Descrição -> ' . $produto->descricao . '</li>';
                    
              }

             $html .= '</ul>';
             return $html;
             //return '<h2>Pegando a rota a partir um método dentro de uma classe</h2>';
       }

      

       public function list(){
          $X = 0;
          $Y = 0;
          $limit = 0;
          $list = 0;
          
          for($i = 0; $i <= $limit; $i++){
              $X = $i;
              $Y = $i * $X;
              $list = $X * $Y;

              echo ($X . $Y . $list);

          }
       }


}

?>