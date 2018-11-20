<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PublishUserRepository;
use App\Entities\PublishUser;
use App\Validators\PublishUserValidator;

/**
 * Class PublishUserRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PublishUserRepositoryEloquent extends BaseRepository implements PublishUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PublishUser::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PublishUserValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
