<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\Admin\User\UserInsertRequest ;
use App\Http\Requests\Admin\User\UserEditarRequest ;
use App\Http\Requests\Admin\User\UserUpdatePasswordRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
 {
    protected $user, $role, $params;
    public function __construct(User $users,  Role $roles)
    {
        $this->user = $users;
        $this->role = $roles;

        // Default values
        $this->params['titulo']='Usuário';
        $this->params['main_route']='admin.user';

    }

    public function index()
    {
        // PARAMS DEFAULT
        $this->params['subtitulo']='Usuários Cadastrados';
        $this->params['arvore'][0] = [
                    'url' => 'admin/user',
                    'titulo' => 'Usuários'
        ];

        $params = $this->params;
        if(Gate::allows('admin', Auth::user())) {
            $data = $this->user->get();
        }else{
            $data = $this->user->where('id',Auth::user()->id)->get();
        }
        return view('admin.user.index',compact('params','data'));
    }

    public function create()
    {
        // PARAMS DEFAULT
        $this->params['subtitulo']='Cadastrar Usuário';
        $this->params['arvore']=[
           [
               'url' => 'admin/user',
               'titulo' => 'Usuário'
           ],
           [
               'url' => '',
               'titulo' => 'Cadastrar'
           ]];
       $params = $this->params;
       $preload['roles'] = $this->role->select('name','id')->get();
       return view('admin.user.create',compact('params','preload'));
    }

    public function store(UserInsertRequest $request)
    {
        $dataForm  = $request->all();

        $dataForm['password'] = Hash::make($dataForm['password']);

        $insert = $this->user->create($dataForm);
        if($insert){
            return redirect()->route($this->params['main_route'].'.index');
        }else{
            return redirect()->route($this->params['main_route'].'.create')->withErrors(['Falha ao fazer Inserir.']);
        }
    }

    public function show($id,Role $roles)
    {
        $this->params['subtitulo']='Deletar Usuário';
        $this->params['arvore']=[
           [
               'url' => 'admin/user',
               'titulo' => 'Usuário'
           ],
           [
               'url' => '',
               'titulo' => 'Deletar'
           ]];
        $params = $this->params;

        $data = $this->user->find($id);
        $preload['roles'] = $roles->select('name','id')->get();
        return view('admin.user.show',compact('params','data','preload'));
    }

    public function edit($id,Role $roles)
    {
        $this->params['subtitulo']='Editar Usuário';
        $this->params['arvore']=[
           [
               'url' => 'admin/user',
               'titulo' => 'Usuário'
           ],
           [
               'url' => '',
               'titulo' => 'Cadastrar'
           ]];
       $params = $this->params;


       $data = $this->user->find($id);

       $preload['roles'] = $roles->select('name','id')->get();

       return view('admin.user.create',compact('params', 'data','preload'));
    }

    public function update(UserEditarRequest $request, $id)
    {
        $data = $this->user->find($id);

        $dataForm  = $request->all();

        if($data->update($dataForm)){
            return redirect()->route($this->params['main_route'].'.index');
        }else{
            return redirect()->route($this->params['main_route'].'.create')->withErrors(['Falha ao editar.']);
        }
    }

    public function destroy($id)
    {
        $data = $this->user->find($id);

        if($data->delete()){
            return redirect()->route($this->params['main_route'].'.index');
        }else{
            return redirect()->route($this->params['main_route'].'.create')->withErrors(['Falha ao deletar.']);
        }
    }

    public function showPassword($id,Role $roles)
    {
        $this->params['subtitulo']='Trocar Senha do Usuário';
        $this->params['arvore']=[
           [
               'url' => 'admin/user',
               'titulo' => 'Usuário'
           ],
           [
               'url' => '',
               'titulo' => 'Trocar Senha'
           ]];
        $params = $this->params;

        $data = $this->user->find($id);
        $preload['roles'] = $roles->select('name','id')->get();
        return view('admin.user.show-password',compact('params','data','preload'));
    }

    public function updatePassword(UserUpdatePasswordRequest $request, $id)
    {
        $data = $this->user->find($id);
        $password = $request->only('password');

        $dataForm['password']  = Hash::make($password['password']);

        if($data->update($dataForm)){
            return redirect()->route($this->params['main_route'].'.index');
        }else{
            return redirect()->route($this->params['main_route'].'.show-password')->withErrors(['Falha ao trocar a senha.']);
        }
    }

}
