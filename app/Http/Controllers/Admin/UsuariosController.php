<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UsuariosCreateFormResquest;
use App\Http\Requests\UsuariosEditFormRequest;
use App\Models\Usuarios;
use AppzHttp\Controllers\Util\DataPolisher;


class UsuariosControllers extends Controller
{
   
    private $rowsPerPage = 10;
    
    
    public function listingUsuarios(){

        $usuarios = Usuarios::listing($this->rowsPerPage);
        return view('admin.usuarios.list')
                  ->with('usuarios', $usuarios);
    }

    public function serchUsuarios(Request $request){

        $formData = $request->except(['_token']);
        $usuarios =  Usuarios::search($formData, $this->rowsPerPage);
        return view('admin.usuarios.list')
                  ->with('formData', $formData)
                  ->with('usuarios', $usuarios);
    }

    public function createUsuarios(){
        return view('admin.usuarios.create');
    }

    public function storeUsuarios(UsuariosCreatFormRequest $request){

        $data = $request->except(['_token']);
        $password = md5($data['password']);
        $data =  DataPolisher::toPolish($data, ['RM_EMPTY_STRING', 'TO_LOWER_CASE']);

        $data['nome'] = ucwords($data['nome']);
        $data['password'] = bcrypt($password);
        unset($data['imagem']);

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){

               $data['imagem'] = $request->imagem->storeAs('images/users', "{$data['username']}.png");
               $usuario = Usuarios::create($data);

               if($usuario instanceof Usuarios){

                    return  redirect()->route('admin.usuarios')
                                      ->with('succsess', 'Resgistro salvo com sucesso' );

               }
               return redirect()->back()->withInput()
                                        ->with('error', 'Ocorreu um erro durante a tentativa de salvar o registro! Tente novamente.');
        }
    }

    public function editUsuarios(int $id){
        $data = Usuarios::find($id);

        return view('admin.usuarios.edit')
              ->with('id',         $id)
              ->with('nome',       $data['nome'])
              ->with('email',      $data['email'])
              ->with('isername',   $data['username'])
              ->with('imagem',     $data['imagem']);
    }

    public function updateUsuarios(UsuariosEditFormResquest $request, int $id){
        
        $data = $request->except(['_token']);
        $password = md5($data['password']);
        $data = DataPolisher::toPolish($data, ['RM_EMPTY_STRING', 'TO_LOWER_CASE']);
        $data['nome'] = ucwords($data['nome']);
        unset($data['imagem']);

        if($request->hasfile('imagem') && $request->file('imagem')->isValid()){
            $data['imagem'] = $request->imagem->storeAs('imagem/users', "{$data['username']}.png");
        }

        if(isset($data['password'])) {
                $data['password'] = bcrypt($password);
        }

        $usuario = Usuarios::fiind($id);
        if($usuario->update($data)){
            return redirect()->route('admin.usuarios')
            ->with('success', 'Registro salvo com sucesso!');
        }

        return redirect()->back()
                         ->with('id', $id)
                         ->with('error', 'Ocorreu um erro durante a tentativa de salvar o resgistro! Tente novamente.'); 

    }

    public function updateUsuariosImagem(Request $request, int $id){
        $data = $request->only(['imagem']);

        $usuario = Usuarios::find($id);

        if($request->hasfile('imagem') && $request->file('imagem')->isValid()){
            $data['imagem'] = $request->imagem->storeAs('imagem/users', "{$usuario->username}.png");
        }

        if($usuario->update($data)){
                return redirect()->back()
                                 ->with('success', 'Imagem alterada com sucesso!');

        }

        return redirect()->back()
                         ->with('id', $id)
                         ->with('error', 'Ocorreu um erro durante a tentativa de salvar a imagem! Tente novamente');

    } 

    public function removeUsuario(int $id){
        
        $data = Usuarios::find($id);
        $delete = $data->delete();

        if($delete){
            return redirect()->route('admin.usuarios')
                             ->with('success', 'Usuário excluído com sucesso');
        }

       return redirect()->route('admin.usuarios')
                        ->with('error', 'Ocorreu um erro ao tentar excluir o usuário! Tente novamente.');

    }

    public function turnUsuario(int $id)
    {
        $data =  Usuarios::find($id);

        if($data->situacao == 'ON'){
            $data->sitaucao = 'OFF';
            $data->save();

            return redirect()->route('admin.usuarios')
                             ->with('success', 'O usuario desabilitado com sucesso!');

        }

        $data->situacao == 'ON';
        $data->save();
        return redirect()->route('admin.usuarios')
                         ->with('success', 'Usuário habilitado com sucesso');
    }

    
}
