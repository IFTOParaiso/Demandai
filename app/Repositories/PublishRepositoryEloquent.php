<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\publishRepository;
use App\Entities\Publish;
use App\Validators\PublishValidator;

/**
 * Class PublishRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PublishRepositoryEloquent extends BaseRepository implements PublishRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Publish::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PublishValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
