<?php

namespace App\Http\Controllers;

use App\Entities\Area;
use App\Entities\AreaUser;
use App\Entities\BigArea;
use App\Entities\TypeUser;
use App\Entities\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\AreaCreateRequest;
use App\Http\Requests\AreaUpdateRequest;
use App\Repositories\AreaRepository;
use App\Validators\AreaValidator;

/**
 * Class AreasController.
 *
 * @package namespace App\Http\Controllers;
 */
class AreasController extends Controller
{
    /**
     * @var AreaRepository
     */
    protected $repository;

    /**
     * @var AreaValidator
     */
    protected $validator;

    /**
     * AreasController constructor.
     *
     * @param AreaRepository $repository
     * @param AreaValidator $validator
     */
    public function __construct(AreaRepository $repository, AreaValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BigArea $bigAreas)
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $areas = $this->repository->all();

        $bigAreas = $bigAreas->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $areas,
            ]);
        }

        return view('vendor.adminlte.areas-de-pesquisa.areas-pesquisa', compact('areas', 'bigAreas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AreaCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(AreaCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $area = $this->repository->create($request->all());

            $response = [
                'message' => 'Area created.',
                'data'    => $area->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
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
    public function show($id, BigArea $bigAreas)
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));

        $area = $this->repository->find($id);
        $bigAreas = $bigAreas->all();
        $users = User::all();;

        $researchers = TypeUser::find(3);
        $researchers = $researchers->usuario;

        $area = Area::find($id);
        $researchersAreas = $area->researchersAreas;

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $area,
            ]);
        }

        return view('vendor.adminlte.areas-de-pesquisa.details-area-pesquisa', compact('researchersAreas', 'area', 'bigAreas', 'users'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area = $this->repository->find($id);

        return view('areas.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AreaUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(AreaUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $area = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Area updated.',
                'data'    => $area->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
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
                'message' => 'Area deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Area deleted.');
    }

    public function listarAreas(Area $areas, $idBigArea){
        $areas = $areas->where('big_area_id','=',$idBigArea)->get();
        return $areas;
    }
}
