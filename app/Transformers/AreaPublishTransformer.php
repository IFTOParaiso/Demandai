<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\AreaPublish;

/**
 * Class AreaPublishTransformer.
 *
 * @package namespace App\Transformers;
 */
class AreaPublishTransformer extends TransformerAbstract
{
    /**
     * Transform the AreaPublish entity.
     *
     * @param \App\Entities\AreaPublish $model
     *
     * @return array
     */
    public function transform(AreaPublish $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
