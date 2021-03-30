<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:13 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes\Order;

class SortOrder
{
    /**
     * Ascending order.
     *
     * @var int
     */
    public const ASC = 1;

    /**
     * Descending order.
     *
     * @var int
     */
    public const DESC = 0;
}
