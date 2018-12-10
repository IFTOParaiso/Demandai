<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class AreaValidator.
 *
 * @package namespace App\Validators;
 */
class AreaValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|string|min:5|max:50',
            'status' => 'required|boolean',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|string|min:5|max:50',
            'status' => 'required|boolean',
        ],
    ];
}
