<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\AreaUserRepository;
use App\Entities\AreaUser;
use App\Validators\AreaUserValidator;

/**
 * Class AreaUserRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AreaUserRepositoryEloquent extends BaseRepository implements AreaUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AreaUser::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return AreaUserValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
