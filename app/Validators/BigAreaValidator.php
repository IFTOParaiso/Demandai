<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class BigAreaValidator.
 *
 * @package namespace App\Validators;
 */
class BigAreaValidator extends LaravelValidator
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
