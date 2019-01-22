<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class UserValidator.
 *
 * @package namespace App\Validators;
 */
class UserValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|min:5|max:100',
            'email' => 'required|email|unique:users|min:5|max:150',
            'password' => 'required|confirmed|min:6',
            'formation' => 'required|boolean',
            'lattes' => 'required|unique:users|url|min:5|max:200',
            'status' => 'required',
            'institution_id' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|min:5|max:100',
            'email' => 'required|email|min:5|max:150',
            'password' => 'required|confirmed|min:6',
            'formation' => 'required',
            'lattes' => 'required|url|min:5|max:200',
            'status' => 'required|boolean',
            'institution_id' => 'required',
        ],
    ];
}
