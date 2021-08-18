<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:15 PM
 */

declare(strict_types=1);

if (!function_exists('int_in_range')) {
    /**
     * Check the int value on the valid range.
     *
     * @param int|null $value
     * @param int $min
     * @param int $max
     * @return int|false
     */
    function int_in_range(?int $value, int $min, int $max)
    {
        return filter_var(
            $value,
            FILTER_VALIDATE_INT,
            [
                'options' => [
                    'min_range' => $min,
                    'max_range' => $max
                ]
            ]
        );
    }
}
