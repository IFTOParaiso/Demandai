<?php

namespace App\Presenters;

use App\Transformers\BigAreaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class BigAreaPresenter.
 *
 * @package namespace App\Presenters;
 */
class BigAreaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new BigAreaTransformer();
    }
}
