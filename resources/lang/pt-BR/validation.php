<?php


return [

    /* 
    |--------------------------------------------------------------------------|
    | Validation Language Lines                                                |
    |--------------------------------------------------------------------------|
    |                                                                          |
    | The following language lines contain the default error messages used by  |
    | the validator class. Some of these rules have multiple versions such     |
    | as the size rules. Feel free to tweak each of these messages.            |
    |--------------------------------------------------------------------------|
    */
    'accepted'            => 'O campo :attribute deve er aceito.',
    'active_url'          => 'O campo :attribute deve conter uma URL válida.',
    'after'               => 'O campo :attribute deve conter uma data superior ou igual a :date.',
    'alpha'               => 'O campo :attribute deve conter apenas letras.',
    'alpha-dash'          => 'O campo :attribute deve conter apenas letras, números e traços.',
    'alpha_num'           => 'O campo :attribute deve conter apenas letras e números.',
    'array'               => 'O campo :attribute deve conter um array.',
    'before'              => 'O campo :attribute deve conter uma data anterior a :date.',
    'before_or_equal'     => 'O campo :attribute deve conter uma data interior ou igual a :date.',

    'between'             =>[ 
                            
                           'numeric' => 'O campo :attribute deve conter um número entre :min e :max.', 
                           'file'    => 'O campo :attribute de conter um arquivo de :min e :max kilobytes.',
                           'string'  => 'o campo :attribute deve conter de :min a :max caracteres.',
                           'array'   => 'O campo :attribute deve conter de :min a :max itens.'
                         ],

    'boolean'             => 'O campo :attribute deve conter o valor verdadeiro ou falso.',
    'confirmed'           => 'A confirmação para o campo :attribute não coincide.',
    'date'                => 'O campo :attribute não contém uma data válida.',
    'date_format'         => 'A data informada para o campo :attribute não respeita o formato :format.',
    'different'           => 'Os campos :attribute e :other devem conter valores diferentes.',
    'digits'              => 'O campo :attribute deve conter :digit digitos.',
    'digits_between'      => 'O campo :attribute deve conter :min a :max digitos.',
    'dimensions'          => 'O valor informado para o campo :attribute não é uma dimensão de imagem válida.',
    'distinct'            => 'O campo :attribute contém um valor duplicado.',
    'email'               => 'O campo :attribute não contém um endereço de email válido.',
    'exists'              => 'O valor selecionado para o campo :attribute é inválido.',
    'file'                => 'O campo :attribute deve conter um arquivo.',
    'filled'              => 'O campo :attribute é obrigatório.',
    'image'               => 'O campo :attribute deve conter uma imagem.',
    'in'                  => 'O campo :attribute não contém um valor válido.',
    'in_array'            => 'O campo :attribute não existe em :other.',
    'integer'             => 'O campo :attribute deve conter um número inteiro.',
    'ip'                  => 'O campo :attribute deve conter um IP válido.',
    'ipv4'                => 'O campo :attribute deve conter um ipv4 válido.',
    'ipv6'                => 'O camop :attribute deve conter um ipv6 válido.',
    'json'                => 'O campo :attribute deve conter uma string JSON válida.',

    'max'                 => [
                             'numeric' => 'O campo :attribute não pode conter um valor superior a :max.',
                             'file'    => 'O campo :attribute não pode conter mais que :max kilobytes.',
                             'string'  => 'O campo :attribute não pode conter mais de :max caracteres.',
                             'array'   => 'O campo :attribute deve conter no máximo :max itens.',
                            ],

    'mimes'                => 'O campo :attribute deve conter um arquivo do tipo :values.',
    'mimetypes'            => 'O campo :attribute deve conter um arquivo do tipo :values.',

    'min'                  => [
                               'numeric' => 'O campo :attribute não pode conter um valor inferior a :min.',
                               'file'    => 'O campo :attribute não pode conter um valor inferior a :min kilobytes.',
                               'string'  => 'O campo :attribute não pode conter menos que :min caracteres.',
                               'array'   => 'O campo :attribute edeve conter no mínimo :min itens.',
                              ],

    'not_in'               => 'O campo :attribute contém um valor inválido.',
    'numeric'              => 'O campo :attribute deve conter um valor numérico.',
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'O formato do valor informado no campo :attribute é inválido.',
    'required'             => 'O campo do valor :attribute é obrigatório.',
    'required_unless'      => 'O campo :attribute é obrigatório ao menos que :other esteja presente em :values.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_if'          => 'O campo :attribute é obrigatório quando o valor do campo :other é igual a :values',
    'required_unles'       => 'O campo :attribute é obrigatório a menos que :other esteja presente em :values',
    'required_with'        => 'O campo :attribute é obrigatório quando o campo :other estiver presente',
    'required_without'     => 'O campo :attribute é o brigatório quando :value está presente',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values está presente',
    'save'                 => 'Os campos :attribute e :other devem conter valores iguais',
    
        'size'             => [
                               'numeric'  => 'O campo :attribute de conter um número :size',
                               'file'     => 'O campo :attribute deve conter um arquivo com tamanho de :size kilobytes',
                               'string'   => 'O campo :attribute deve conter :size caracteres',
                               'array'    => 'O campo :attribute deve conter um valor',
                              ],
    
    'string'               => 'O campo :attribute deve usar uma string',
    'timezone'             => 'O campo :attribute deve conter um fuso horário válido',
    'unique'               => 'O valor informado para o campo :attribute já está em uso',
    'uploaded'             => 'Falha no upload do arquivo :attribute',
    'url'                  => 'O formato da URL informada para o campo :attribute é inválido',




 /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'               => [
                              'attribute-name' => [
                              'rule-name'      => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes'     => [

        'address'     => 'endereço',
        'age'         => 'idade',
        'body'        => 'conteúdo',
        'city'        => 'cidade',
        'country'     => 'país',
        'date'        => 'data',
        'day'         => 'dia',
        'description' => 'descrição',
        'excerpt'     => 'resumo',
        'first_name'  => 'primeiro nome',
        'gender'      => 'gênero',
        'hour'        => 'hora',
        'last_name'   => 'sobrenome',
        'message'     => 'mensagem',
        'minute'      => 'minuto',
        'mobile'      => 'celular',
        'month'       => 'mês',
        'name'        => 'nome',
        'password_confirmation' => 'confirmação da senha',
        'password'    => 'senha',
        'phone'       => 'telefone',
        'second'      => 'segundo',
        'sex'         => 'sexo',
        'state'       => 'estado',
        'subject'     => 'assunto',
        'text'        => 'texto',
        'time'        => 'hora',
        'title'       => 'título',
        'username'    => 'usuário',
        'year'        => 'ano',
    ],
 ];
