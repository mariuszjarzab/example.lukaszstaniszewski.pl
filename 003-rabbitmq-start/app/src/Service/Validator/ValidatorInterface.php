<?php
declare(strict_types=1);

namespace App\Service\Validator;

/**
 * Interface ValidatorInterface
 * @package App\Service\Validator
 */
interface ValidatorInterface
{
    /**
     * @param $value
     * @return bool
     */
    public static function validate($value): bool;
}
