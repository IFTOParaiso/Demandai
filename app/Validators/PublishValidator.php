<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class PublishValidator.
 *
 * @package namespace App\Validators;
 */
class PublishValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'title' => 'required|min:5|max:50',
            'description' => 'required|min:5|max:1000',
            'date_closure' => 'required|date',
            'link' => 'required|url|min:10|max:255'

        ],
        ValidatorInterface::RULE_UPDATE => [
           'title' => 'required|min:5|max:100',
            'description' => 'required|min:5|max:1000',
            'date_closure' => 'required|date',
            'link' => 'required|url|min:10|max:255'
        ],
    ];
}
