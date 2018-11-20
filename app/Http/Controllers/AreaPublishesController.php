<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\AreaPublishCreateRequest;
use App\Http\Requests\AreaPublishUpdateRequest;
use App\Repositories\AreaPublishRepository;
use App\Validators\AreaPublishValidator;

/**
 * Class AreaPublishesController.
 *
 * @package namespace App\Http\Controllers;
 */
class AreaPublishesController extends Controller
{
    /**
     * @var AreaPublishRepository
     */
    protected $repository;

    /**
     * @var AreaPublishValidator
     */
    protected $validator;

    /**
     * AreaPublishesController constructor.
     *
     * @param AreaPublishRepository $repository
     * @param AreaPublishValidator $validator
     */
    public function __construct(AreaPublishRepository $repository, AreaPublishValidator $validator)
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
        $areaPublishes = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $areaPublishes,
            ]);
        }

        return view('areaPublishes.index', compact('areaPublishes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AreaPublishCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(AreaPublishCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $areaPublish = $this->repository->create($request->all());

            $response = [
                'message' => 'AreaPublish created.',
                'data'    => $areaPublish->toArray(),
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
        $areaPublish = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $areaPublish,
            ]);
        }

        return view('areaPublishes.show', compact('areaPublish'));
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
        $areaPublish = $this->repository->find($id);

        return view('areaPublishes.edit', compact('areaPublish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AreaPublishUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(AreaPublishUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $areaPublish = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'AreaPublish updated.',
                'data'    => $areaPublish->toArray(),
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
                'message' => 'AreaPublish deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'AreaPublish deleted.');
    }
}
