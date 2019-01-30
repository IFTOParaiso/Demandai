<?php

namespace App\Http\Controllers;

use App\Entities\BigArea;
use App\Entities\Institution;
use App\Entities\TypeUser;
use App\Mail\CadastradoComSucesso;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use App\Entities\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

/**
 * Class UsersController.
 *
 * @package namespace App\Http\Controllers;
 */
class UsersController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * @var UserValidator
     */
    protected $validator;

    /**
     * UsersController constructor.
     *
     * @param UserRepository $repository
     * @param UserValidator $validator
     */
    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $users = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $users,
            ]);
        }
        return view('vendor.adminlte.users.listar-users', compact('users'));

    }
    public function pesquisador(){
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $users = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $users,
            ]);
        }

        $researchers = TypeUser::find(3);
        $researchers = $researchers->usuario;

        return view('vendor.adminlte.users.pesquisador.listar-pesquisador', compact('researchers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request)
    {

        try {

            if($request['tipousuario'][0] == 2){
                $user = User::create([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => Hash::make($request['password']),
                    'password_confirmation' => Hash::make($request['password_confirmation']),
                    'formation' => 4,
                    'lattes' => $request['email'],
                    'status' => 1,
                    'institution_id' => 1,]);
                $dataform = $request['tipousuario'];
                $user->tipoUsuario()->sync($dataform);

                if ($request['tipousuario'][0] == 3) {

                    $dataform = $request['areas'];
                    $user->areasUsuario()->sync($dataform);
                }
                return redirect('cadastrar-usuario/propi')->with('message','Usuário cadastrado!');
            }else{
                $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

                $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'password_confirmation' => Hash::make($request['password_confirmation']),
                'formation' => $request['formation'],
                'lattes' => $request['lattes'],
                'status' => $request['status'],
                'institution_id' => $request['institution_id'],]);

            $dataform = $request['tipousuario'];
            $user->tipoUsuario()->sync($dataform);

            if ($request['tipousuario'][0] == 3) {

                $dataform = $request['areas'];
                $user->areasUsuario()->sync($dataform);
            }
            $messagem = [
                'message' => 'Usuário cadastrado!',
                'data' => $user->toArray(),
            ];
            Mail::to($request['email'], $request['name'])->send(new CadastradoComSucesso($request));

            if ($request->wantsJson()) {

                return response()->json($messagem);
            }
            return redirect('login/pesquisador')->with('message','Usuário cadastrado!');
            }
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id, Institution $institutions)
    {
        $user = $this->repository->find($id);
        $institutions = $institutions->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $user,
            ]);
        }

        $tipo = $user->tipoUsuario()->get()->all();
        foreach ($tipo as $t) {
            $tipouser = $t->id;
        }
        $areas = $user->areasUsuario;
//            return $areas;

        return view('vendor.adminlte.users.pesquisador.details-pesquisador', compact('user', 'institutions', 'areas', 'tipouser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Institution $institutions, BigArea $bigAreas)
    {
        $user = $this->repository->find($id);
        $institutions = $institutions->all();
        $bigAreas = $bigAreas->all();

        $tipo = $user->tipoUsuario()->get()->all();
        foreach ($tipo as $t) {
            $tipouser = $t->id;
        }

        foreach ($user as $u) {
            $areas = $user->areasUsuario;
        }

        return view('vendor.adminlte.users.pesquisador.edit-pesquisador', compact('user', 'institutions', 'bigAreas', 'areas', 'tipouser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserUpdateRequest $request
     * @param  string $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(Request $request, $id)
    {
        try {

            if (isset($request['password']))
                unset($request['password']);

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $user = $this->repository->update($request->all(), $id);
            $areas = $request['areas'];
            $user->areasUsuario()->sync($areas);

            $response = [
                'message' => 'Usuário Atualizado com Sucesso!',
                'data' => $user->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            if (Auth::user()->id == $user->id) {
                return redirect(url('meu-perfil'))->with('message');
            } else
                return redirect(url('detalhe-pesquisador/show', compact('id')))->with('message');

        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'User deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'User deleted.');
    }

    public function cadastrarUsuario(Institution $institutions, $tipo_usuario, BigArea $bigAreas)
    {
//        if ($tipo_usuario == 'pesquisador'){
//            $institutions = $institutions->all();
//            $bigAreas = $bigAreas->all();
//            return view('vendor.adminlte.users.cad-pesquisador', compact('institutions','tipo_usuario', 'bigAreas'));
//        }

        if (Auth::check()) {
            if ($tipo_usuario == 'pesquisador') {
                $institutions = $institutions->all();
                $bigAreas = $bigAreas->all();
                return view('vendor.adminlte.users.pesquisador.cad-pesquisador', compact('institutions', 'tipo_usuario', 'bigAreas'));
            }

            $institutions = $institutions->all();
            $bigAreas = $bigAreas->all();
            return view('vendor.adminlte.users.pesquisador.cad-pesquisador', compact('institutions', 'tipo_usuario', 'bigAreas'));
        }

        $institutions = $institutions->all();
        $bigAreas = $bigAreas->all();
        return view('vendor.adminlte.register', compact('institutions', 'tipo_usuario', 'bigAreas'));
    }

    public function showFormLogin($tipo_usuario)
    {
        return view('vendor.adminlte.login', compact('tipo_usuario'));
    }

    public function meuPerfil(Institution $institutions)
    {
        $user = $this->repository->all();
        $institutions = $institutions->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $user,
            ]);
        }

        $user = new User();
        $user->id = Auth::user()->id;
        $tipo = $user->tipoUsuario()->get()->all();
        foreach ($tipo as $t) {
            $tipouser = $t->id;
        }
        $areas = $user->areasUsuario;

        return view('vendor.adminlte.users.meu-perfil', compact('user', 'institutions', 'tipouser', 'areas'));
    }

    public function areasUsuario($id = 10)
    {
        $user = $this->repository->find($id);
        foreach ($user as $u) {
            $areas = $user->areasUsuario;
        }

        return view('vendor.adminlte.users.edit-pesquisador', compact('areas', 'user', 'areas'));
    }

    public function showFormEditPassword(User $user, $id)
    {
        $user = $user->find($id);
        return view('vendor.adminlte.users.pesquisador.auth.edit-password', compact('user'));
    }

    public function updatePassword(User $user, Request $request, $id)
    {

        $e = \Illuminate\Support\Facades\Validator::make($request->all(), $this->validator->rulesPassword());
        if ($e->fails()) {
            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }

        $user = $user->find($id)->update(
            ['password' => Hash::make($request->input('password'))]
        );

        if ($user) {
            return redirect()->back()->with('message','Senha alterada!');
        }


    }


}
