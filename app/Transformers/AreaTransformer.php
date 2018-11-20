<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Area;

/**
 * Class AreaTransformer.
 *
 * @package namespace App\Transformers;
 */
class AreaTransformer extends TransformerAbstract
{
    /**
     * Transform the Area entity.
     *
     * @param \App\Entities\Area $model
     *
     * @return array
     */
    public function transform(Area $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
