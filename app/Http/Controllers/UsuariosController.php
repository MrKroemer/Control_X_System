<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller 
{

        public function __construct(){

            return $this->middleware('auth');
            
        }

            public function users(){

                $users = DB::select('select * from users');
                $html = '<h1 style="background-color: blue; color:white; width: 30%;">Rotas para controle de usuários[permissões]</h1>';
                foreach($users as $user){

                    $html .= '<ul>';
                    $html .= '<li style="font-weight: bold; color:blue;"> Nome: ' . $user->name . '</li>';
                    $html .= '<li style="font-weight: bold; color:blue;"> Email: ' . $user->email . '</li>';
                    $html .= '<ul>';

                }
                return $html;
               
            }

}