@extends(adminlte::page);

@section('title', "Registro de Usuários")
@section('content_header')

<ol class="breadcrumb">

<li><a href="">Dashboard</a></li>
<li><a href="">Usuários</a></li>
<li><a href="">Cadastros</a></li>

</ol>

@endsection

@include('admin.alerts.includes')

<div class="box">
    <div class="box-header">
       </div>
          <div class="box-body">
                    @php

                       $nome     =    !empty(session('nome'))     ? session('nome')        : old('nome')
                       $email    =    !empty(session('email'))    ? session('email')       : old('email')
                       $username =    !mepty(session('username')) ? session('username')    : old('username')

                    @endphp

                    <form action="{{ route('admin.usuarios.to_store) }}" method="POST" enctype="multipart/form-data">{!!crsf_field()!!}
                            <div class="form-group"><label for="nome">Nome:</label> <input type="text" name="nome" placeholder="Nome" class="form-control" value="{{$nome}}"></div>
                            <div class="form-group"> <label for="email">Email:</label><input type="text" name="email" placeholder="E-mail" class="form-control" value="{{$email}}"></div>
                            <div class="form-group">´<label for="username">Login:</label><input type="text" name="username" placeholder="Login" class="form-control" value="{{$username}}"></div>
                            <div class="form-group"><label for="password">Senha:</label><input type="password" name="password" placeholder="Digite sua senha" class="form-control"></div>
                            <div class="form-group"><label for="confirm_password">Confirme sua senha</label><input type="confirm-password" placeholder="Confirme sua senha" class="form-control"></div>

                            <div class="form-group">´

                                   <div class="row">
                                            <div class="col-md-6"><label for="imagem">Imagem do usuário</label><!-- Prévia da imagem--> <div class="input-group image-preview">
                                            
                                            <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                            <span class="input-group-btn"> <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                            <span class="glyphicon glyphicon-folder-open"></span> Remover </button>
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Adicionar</span>
                                                <input type="file" name="image" accept="image/png, image/jpeg"/>
                                             </div>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>
                                               <div class="form-group"><button class="btn btn-primary" type="submit"> <i class="fa fa-save" aria-hidden="true"></i>Salvar</button>
                                                        <a href="{{ route('admim.usuarios') }}" class="btn btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i>Voltar para a listagem</a>   
                                             </div>
                                    </div>
                            </div>
                    </form>

              </div>
       </div>

       @endsection


