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
            'name' => 'required|min:3|max:100',
            'email'=> 'email|unique:users,email',
            //'password'=> 'alpha_num|between:6,20|Confirmed',
            'password' => 'alpha_num|between:6,20',
            'formation'=> 'required|cp|unique:users,cpf',
            'lattes' => 'required|link',
        ],


        ValidatorInterface::RULE_UPDATE => [],
    ];
}
