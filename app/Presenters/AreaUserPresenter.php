<?php

namespace App\Presenters;

use App\Transformers\AreaUserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class AreaUserPresenter.
 *
 * @package namespace App\Presenters;
 */
class AreaUserPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AreaUserTransformer();
    }
}
