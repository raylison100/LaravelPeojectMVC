<?php
/**
 * Created by IntelliJ IDEA.
 * User: rayli
 * Date: 30/01/2019
 * Time: 14:51
 */

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Automovel;

class AutomovelTransformer extends TransformerAbstract
{
    /**
     *
     * @param \App\Entities\Automovel $model
     *
     * @return array
     */
    public function transform(Automovel $model)
    {
        return [
            'id'            => (int) $model->id,
            'modelo'        => $model->modelo,
            'marca'         => $model->marca,
            'tipo'          => $model->tipo,
            'ano'           => $model->ano,
            'placa'         => $model->placa,
        ];
    }
}
