<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\AreaPublishRepository;
use App\Entities\AreaPublish;
use App\Validators\AreaPublishValidator;

/**
 * Class AreaPublishRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AreaPublishRepositoryEloquent extends BaseRepository implements AreaPublishRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AreaPublish::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return AreaPublishValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
