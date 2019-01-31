<?php
/**
 * Created by IntelliJ IDEA.
 * User: rayli
 * Date: 30/01/2019
 * Time: 14:50
 */

namespace App\Presenters;

use App\Transformers\AutomovelTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class AutomovelPresenter extends FractalPresenter
{
    public function getTransformer()
    {
        return new AutomovelTransformer();
    }
}
