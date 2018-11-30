<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class TypeUserValidator.
 *
 * @package namespace App\Validators;
 */
class TypeUserValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|string|min:5|max:50',
            'description' => 'required|min:10|max:100',
            'status' => 'required|boolean'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|string|min:5|max:50',
            'description' => 'required|min:10|max:100',
            'status' => 'required|boolean'
        ],
    ];
}
