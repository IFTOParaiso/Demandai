<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\AreaUserCreateRequest;
use App\Http\Requests\AreaUserUpdateRequest;
use App\Repositories\AreaUserRepository;
use App\Validators\AreaUserValidator;

/**
 * Class AreaUsersController.
 *
 * @package namespace App\Http\Controllers;
 */
class AreaUsersController extends Controller
{
    /**
     * @var AreaUserRepository
     */
    protected $repository;

    /**
     * @var AreaUserValidator
     */
    protected $validator;

    /**
     * AreaUsersController constructor.
     *
     * @param AreaUserRepository $repository
     * @param AreaUserValidator $validator
     */
    public function __construct(AreaUserRepository $repository, AreaUserValidator $validator)
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
        $areaUsers = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $areaUsers,
            ]);
        }

        return view('areaUsers.index', compact('areaUsers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AreaUserCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(AreaUserCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $areaUser = $this->repository->create($request->all());

            $response = [
                'message' => 'AreaUser created.',
                'data'    => $areaUser->toArray(),
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
        $areaUser = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $areaUser,
            ]);
        }

        return view('areaUsers.show', compact('areaUser'));
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
        $areaUser = $this->repository->find($id);

        return view('areaUsers.edit', compact('areaUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AreaUserUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(AreaUserUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $areaUser = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'AreaUser updated.',
                'data'    => $areaUser->toArray(),
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
                'message' => 'AreaUser deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'AreaUser deleted.');
    }
}
