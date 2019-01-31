<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Automovel.
 *
 * @package namespace App\Entities;
 */
class Automovel extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'automoveis';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'modelo',
        'marca',
        'tipo',
        'ano',
        'placa',
    ];

}
