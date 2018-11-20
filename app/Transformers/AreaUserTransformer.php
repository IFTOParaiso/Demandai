<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\AreaUser;

/**
 * Class AreaUserTransformer.
 *
 * @package namespace App\Transformers;
 */
class AreaUserTransformer extends TransformerAbstract
{
    /**
     * Transform the AreaUser entity.
     *
     * @param \App\Entities\AreaUser $model
     *
     * @return array
     */
    public function transform(AreaUser $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
