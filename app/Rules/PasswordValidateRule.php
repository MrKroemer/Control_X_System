<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordValidateRule implements Rule
{
    /**
     * @param string
     * @param mixed
     * @return bool
     */
    public function passes($attribute, $value){
        return !(strlen($value) > 0 && strlen($value) < 8);

        /**dsw
         * Obtém uma mensagem de erro de validação.
         * @return string
         */

        }
    
        public function message(){
            return 'A senha deve conter no mínimo 8 caracters';
        }
}