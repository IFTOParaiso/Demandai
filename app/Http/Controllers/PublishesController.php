<?php

namespace App\Http\Controllers;

use App\Entities\AreaUser;
use App\Entities\BigArea;
use App\Entities\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PublishCreateRequest;
use App\Http\Requests\PublishUpdateRequest;
use App\Repositories\PublishRepository;
use App\Validators\PublishValidator;
use App\Entities\Publish;
use Illuminate\Support\Facades\Auth;

/**
 * Class PublishesController.
 *
 * @package namespace App\Http\Controllers;
 */
class PublishesController extends Controller
{
    /**
     * @var PublishRepository
     */
    protected $repository;

    /**
     * @var PublishValidator
     */
    protected $validator;

    /**
     * PublishesController constructor.
     *
     * @param PublishRepository $repository
     * @param PublishValidator $validator
     */
    public function __construct(PublishRepository $repository, PublishValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publish = Publish::all();
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $publishes = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $publishes,
            ]);
        }
//        dd($publish);
        return view('vendor.adminlte.publishes.list-publishes', compact('publishes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PublishCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $publish = $this->repository->create($request->all());

            $areas = $request['areas'];
            $publish->areasEdital()->sync($areas);

            $pesquisadores = $request['pesquisadores'];
            $publish->editalUsuario()->sync($pesquisadores);

            $response = [
                'message' => 'Publish created.',
                'data'    => $publish->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

//            return redirect()->back()->with('message', $response['message']);
            return redirect('listar-edital');
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
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
    public function show($id)
    {
        $publish = $this->repository->find($id);
        foreach($publish as $valor){
            $publish->areasEdital;
        }

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $publish,
            ]);
        }

        $user = new User();
        $user->id = Auth::user()->id;
        $tipo = $user->tipoUsuario()->get()->all();
            foreach ($tipo as $t){
                $tipouser = $t->name;
            }

            $areas = $publish->areasEdital;
       // dd($publish->areasEdital);
        return view('vendor.adminlte.publishes.details-publishes', compact('publish','tipouser','areas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id, BigArea $bigAreas)
    {
        $bigAreas = $bigAreas->all();
        $publish = $this->repository->find($id);

        return view('vendor.adminlte.publishes.edit-publishes', compact('publish', 'bigAreas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PublishUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(Request $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $publish = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Publish updated.',
                'data'    => $publish->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

//            return redirect()->back()->with('message', $response['message']);
            return redirect(url('detalhe-edital/show',compact('id')));
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
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
                'message' => 'Publish deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Publish deleted.');
    }

    public function cadastrarEdital(BigArea $bigAreas){

        $bigAreas = $bigAreas->all();
        return view('vendor.adminlte.publishes.cad-publishes', compact('bigAreas'));
    }

    public function listarInteressadosEdital($areas){
        $areas = json_decode($areas);
        $pesquisador = AreaUser::whereIn('area_id',$areas)->get();

        if(count($pesquisador)<1){

        }else{
            foreach ($pesquisador as $p){
                $interessados[] = $p->user_id;
            }

            $interessados = array_unique($interessados);

            $pesquisadores = User::whereIn('id',$interessados)->get();

            return $pesquisadores;
        }

    }
}
