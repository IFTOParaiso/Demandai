<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\BigAreaCreateRequest;
use App\Http\Requests\BigAreaUpdateRequest;
use App\Repositories\BigAreaRepository;
use App\Validators\BigAreaValidator;

/**
 * Class BigAreasController.
 *
 * @package namespace App\Http\Controllers;
 */
class BigAreasController extends Controller
{
    /**
     * @var BigAreaRepository
     */
    protected $repository;

    /**
     * @var BigAreaValidator
     */
    protected $validator;

    /**
     * BigAreasController constructor.
     *
     * @param BigAreaRepository $repository
     * @param BigAreaValidator $validator
     */
    public function __construct(BigAreaRepository $repository, BigAreaValidator $validator)
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
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $bigAreas = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $bigAreas,
            ]);
        }

        return view('bigAreas.index', compact('bigAreas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BigAreaCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(BigAreaCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $bigArea = $this->repository->create($request->all());

            $response = [
                'message' => 'BigArea created.',
                'data'    => $bigArea->toArray(),
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
    public function show($id)
    {
        $bigArea = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $bigArea,
            ]);
        }

        return view('bigAreas.show', compact('bigArea'));
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
        $bigArea = $this->repository->find($id);

        return view('bigAreas.edit', compact('bigArea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BigAreaUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(BigAreaUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $bigArea = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'BigArea updated.',
                'data'    => $bigArea->toArray(),
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
                'message' => 'BigArea deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'BigArea deleted.');
    }
}
