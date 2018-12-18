<?php

namespace App\Http\Controllers;

use App\Entities\BigArea;
use App\Entities\Institution;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use App\Entities\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmaCadastro;
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
    public function index($tipo_usuario)
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $users = User::all();
        foreach ($users as $valor) {
            $valor->tipoUsuario;
        }

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $users,
            ]);
        }
        // dd($users);
//        return view('users.index', compact('users'));
//        return view('vendor.adminlte.users.listar-propi', compact('users'));
        return view('vendor.adminlte.users.pesquisador.listar-pesquisador', compact('users', 'tipo_usuario'));
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

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $request['password'] = bcrypt($request['password']);
            $user = $this->repository->create($request->all());
            $dataform = $request['tipousuario'];
            $user->tipoUsuario()->sync($dataform);

            if($request['tipousuario'][0] == 3) {

                $dataform = $request['areas'];
                $user->areasUsuario()->sync($dataform);
            }
            $response = [
                'message' => 'Usuário cadastrado!',
                'data' => $user->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag()
                ]);
            }
            Mail::to($request['email'],$request['name'])->send(new ConfirmaCadastro($request));

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

        return view('vendor.adminlte.users.pesquisador.details-pesquisador', compact('user', 'institutions'));
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
//        return view('users.edit', compact('user'));
        return view('vendor.adminlte.users.pesquisador.cad-pesquisador', compact('user', 'institutions', 'bigAreas'));
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
    public function update(UserUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $user = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'User updated.',
                'data' => $user->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
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

    public function login($tipo_usuario)
    {
        return view('vendor.adminlte.login', compact('tipo_usuario'));
    }
}
