<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PublishUserCreateRequest;
use App\Http\Requests\PublishUserUpdateRequest;
use App\Repositories\PublishUserRepository;
use App\Validators\PublishUserValidator;

/**
 * Class PublishUsersController.
 *
 * @package namespace App\Http\Controllers;
 */
class PublishUsersController extends Controller
{
    /**
     * @var PublishUserRepository
     */
    protected $repository;

    /**
     * @var PublishUserValidator
     */
    protected $validator;

    /**
     * PublishUsersController constructor.
     *
     * @param PublishUserRepository $repository
     * @param PublishUserValidator $validator
     */
    public function __construct(PublishUserRepository $repository, PublishUserValidator $validator)
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
        $publishUsers = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $publishUsers,
            ]);
        }

        return view('publishUsers.index', compact('publishUsers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PublishUserCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(PublishUserCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $publishUser = $this->repository->create($request->all());

            $response = [
                'message' => 'PublishUser created.',
                'data'    => $publishUser->toArray(),
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
        $publishUser = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $publishUser,
            ]);
        }

        return view('publishUsers.show', compact('publishUser'));
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
        $publishUser = $this->repository->find($id);

        return view('publishUsers.edit', compact('publishUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PublishUserUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(PublishUserUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $publishUser = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'PublishUser updated.',
                'data'    => $publishUser->toArray(),
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
                'message' => 'PublishUser deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'PublishUser deleted.');
    }
}
