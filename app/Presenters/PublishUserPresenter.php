<?php

namespace App\Presenters;

use App\Transformers\PublishUserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PublishUserPresenter.
 *
 * @package namespace App\Presenters;
 */
class PublishUserPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PublishUserTransformer();
    }
}
