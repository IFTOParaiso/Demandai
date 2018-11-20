<?php

namespace App\Presenters;

use App\Transformers\AreaPublishTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class AreaPublishPresenter.
 *
 * @package namespace App\Presenters;
 */
class AreaPublishPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AreaPublishTransformer();
    }
}
