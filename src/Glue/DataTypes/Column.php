<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:09 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\ListMap;
use Lalcebo\Aws\Params\Parameter;

/**
 * A column in a Table.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_Column.html
 */
class Column extends Parameter
{
    /**
     * The name of the column.
     *
     * @var string
     */
    public $name;

    /**
     * The data type of the column.
     *
     * @var string
     */
    public $type;

    /**
     * A free-form text comment.
     *
     * @var string
     */
    public $comment;

    /**
     * These key-value pairs define properties associated with the column.
     *
     * @var ListMap
     */
    public $parameters;

    /**
     * A column in a Table.
     *
     * @param string $name The name of the Column.
     * @param string|null $type The data type of the column.
     * @param string|null $comment A free-form text comment.
     * @param ListMap|null $parameters Properties associated with the column.
     *
     * @see https://docs.aws.amazon.com/athena/latest/ug/data-types.html
     */
    public function __construct(string $name, string $type = null, string $comment = null, ListMap $parameters = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->comment = $comment;
        $this->parameters = $parameters;
    }
}
