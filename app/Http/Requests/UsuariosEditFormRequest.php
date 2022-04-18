<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PasswordValidateRule;

class UsuariosEditFormRequest extends FormRequest
{
    /*
      * Determina se o usuário está autorizado a fazer esta solicitação.
      * @return bool  
     */
    public function authorize(){
        return true;
    }

    /**
     * Obtém as regras de validação que serão aplicadas a solicitação.
     * @return array
     */

     public function rules(){
         return [
             'nome' => 'required|string|main:5|max:50',
             'email'=> 'required|email|max:100',
             'username' => 'required|string|max:50',
             'password' => ['max:100', new PasswordValidateRule],
             'password_confirmate' => 'same:password',
         ];
     }

     public function messages(){
         return
            [
            
            'nome.required'                               => 'O campo nome deve ser informado',
            'nome.min'                                    => 'O campo nome deve possuir no mínimo :min caracter',
            'nome.max'                                    => 'O campo nome deve possuir no máximo :max caracter',

            'email.required'                              => 'O campo email deve ser informado',
            'email.max'                                   => 'O campo email deve possuir no máximo :max carcters',

            'username.required'                           => 'O campo nome do usuário deve ser informado',
            'username.max'                                => 'O campo nome de usuário deve ter no máximo :max caracters',
            
            'password.min'                                => 'A senha deve possuir :min caracters no mínimo',
            'password.confirmation.same'                  => 'As duas senhas não combinam',
        
        ]; 
     }
}