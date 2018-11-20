<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\PublishUser;

/**
 * Class PublishUserTransformer.
 *
 * @package namespace App\Transformers;
 */
class PublishUserTransformer extends TransformerAbstract
{
    /**
     * Transform the PublishUser entity.
     *
     * @param \App\Entities\PublishUser $model
     *
     * @return array
     */
    public function transform(PublishUser $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
