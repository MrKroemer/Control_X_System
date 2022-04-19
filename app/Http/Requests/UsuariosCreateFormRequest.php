<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosCreateFormResquest extends FormRequest
{
    /**
     * Determina se  o usuario está autorizado a realizar a solicitação.
     * @return bool
     */

     public function authorize(){
         return true;
     }

     /**
      * Obtém a validação das regras que serão aplicadas a solicitação.
      */

      public function rules(){
          return 
          [ 'nome'   => 'required|string|min:5|max:50',
            'email'  =>  'required|string|email|max:100',
            'username' => 'required|string|max:50|unique:usuarios,username',
            'password' => 'required|min:8|max:100',
            'password_confirmation'=> 'required|same:password',

         ];

      }

      public function messages(){
          
        return 
               ['nome.required'  => 'O campo "Nome" deve ser informado.',
                'nome.min'       => 'O campo "Nome" deve posssuir no mínimo :min caracteres.',
                'nome.max'       => 'O campo "Nome" deve possuir no máximo :max caracteres.',

                'email.required' => 'O campo "Email deve ser informado.',
                'email.max'      => 'O campo "Email" deve possuir no máximo :max caracteres.',

                'username.required' => 'O campo "Login" deve ser informado.',
                'username.max'      => 'O campo "Login" deve possuir no máximo :max caracteres.',
                'username.unique'   => 'O campo "Login" informado já está associado a outro usuário.',

                'password.required' => 'O campo "Password" deve ser informado.',
                'password.min'      => 'O campo "Password" deve ter no mínimo :min caracteres.',
                'password.max'      => 'O campo "Password" deve ter no máximo :max caracteres.',
                
                'password_confirmation.required' => 'O campo "Confirmar senha" deve ser informado.',
                'password_confirmation>same'     => 'As senhas informadas devem ser correspondentes.',

          ];
      }
}
 
