<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class AutomovelValidator.
 *
 * @package namespace App\Validators;
 */
class AutomovelValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'modelo'        => 'required|max:20',
            'marca'         => 'required|max:20',
            'tipo'          => 'required|max:20',
            'ano'           => 'required|max:20',
            'placa'         => 'required|max:20|unique:automoveis,placa',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'modelo'        => 'sometimes|max:20',
            'marca'         => 'sometimes|max:20',
            'tipo'          => 'sometimes|max:20',
            'ano'           => 'sometimes|max:20',
            'placa'         => 'sometimes|max:20|unique',
        ],
    ];
}
