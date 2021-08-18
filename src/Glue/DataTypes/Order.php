<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:12 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\Glue\DataTypes\Order\SortOrder;
use Lalcebo\Aws\Params\Parameter;

/**
 * Specifies the sort order of a sorted column.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_Order.html
 */
class Order extends Parameter
{
    /**
     * The name of the column.
     *
     * @var string
     */
    public $column;

    /**
     * Indicates that the column is sorted in ascending order (== 1), or in descending order (==0).
     *
     * @var int
     */
    public $sortOrder;

    /**
     * Specifies the sort order of a sorted column.
     *
     * @param string $column The name of the column.
     * @param int $sortOrder Indicates that the column is sorted in ascending
     * order (== 1), or in descending order (==0).
     *
     * @see SortOrder for the constants available for the $sortOrder parameter.
     */
    public function __construct(string $column, int $sortOrder)
    {
        $this->column = $column;
        $this->sortOrder = int_in_range($sortOrder, 0, 1);
    }
}
