<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class InstitutionValidator.
 *
 * @package namespace App\Validators;
 */
class InstitutionValidator extends LaravelValidator
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
            'email' => 'required|email|unique:institutions|min:5|max:150',
            'phone' => 'required|min:9|max:13',
            'site' => 'required|url|min:8|max:255',
            'status' => 'required|boolean',
            'street' => 'required|min:5|max:100',
            'number' => 'required|min:1|max:5',
            'sector' => 'required|min:5|max:100',
            'city' => 'required|min:5|max:100',
            'complement' => 'max:150'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|string|min:5|max:50',
            'description' => 'required|min:10|max:100',
            'email' => 'required|email|unique:institutions|min:5|max:150',
            'phone' => 'required|min:9|max:13',
            'site' => 'required|url|min:8|max:255',
            'status' => 'required|boolean',
            'street' => 'required|min:5|max:100',
            'number' => 'required|min:1|max:5',
            'sector' => 'required|min:5|max:100',
            'city' => 'required|min:5|max:100',
            'complement' => 'max:150'
        ],
    ];
}
