<?php

namespace App\Presenters;

use App\Transformers\PublishTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PublishPresenter.
 *
 * @package namespace App\Presenters;
 */
class PublishPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PublishTransformer();
    }
}
