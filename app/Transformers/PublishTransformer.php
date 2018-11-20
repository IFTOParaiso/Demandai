<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Publish;

/**
 * Class PublishTransformer.
 *
 * @package namespace App\Transformers;
 */
class PublishTransformer extends TransformerAbstract
{
    /**
     * Transform the Publish entity.
     *
     * @param \App\Entities\Publish $model
     *
     * @return array
     */
    public function transform(Publish $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
