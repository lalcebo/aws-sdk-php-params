<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:15 PM
 */

declare(strict_types=1);

if (!function_exists('numericRangeValid')) {
    /**
     * Set the numeric value to the valid range.
     *
     * @param int|null $value
     * @param int $min
     * @param int $max
     * @return int|null
     */
    function numericRangeValid(?int $value, int $min, int $max): ?int
    {
        return is_int($value) ? max(min(abs($value), $max), $min) : null;
    }
}
