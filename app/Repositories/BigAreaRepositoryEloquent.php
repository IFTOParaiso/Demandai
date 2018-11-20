<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\BigAreaRepository;
use App\Entities\BigArea;
use App\Validators\BigAreaValidator;

/**
 * Class BigAreaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BigAreaRepositoryEloquent extends BaseRepository implements BigAreaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BigArea::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return BigAreaValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
