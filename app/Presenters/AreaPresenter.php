<?php

namespace App\Presenters;

use App\Transformers\AreaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class AreaPresenter.
 *
 * @package namespace App\Presenters;
 */
class AreaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AreaTransformer();
    }
}
