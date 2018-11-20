<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\BigArea;

/**
 * Class BigAreaTransformer.
 *
 * @package namespace App\Transformers;
 */
class BigAreaTransformer extends TransformerAbstract
{
    /**
     * Transform the BigArea entity.
     *
     * @param \App\Entities\BigArea $model
     *
     * @return array
     */
    public function transform(BigArea $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
