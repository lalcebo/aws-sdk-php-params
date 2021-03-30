<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:39 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\DataTypes;

use Lalcebo\Aws\Params\AbstractBaseParam;

/**
 * The database and data catalog context in which the query execution occurs.
 *
 * @package Lalcebo\Aws\Params\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_QueryExecutionContext.html
 */
class QueryExecutionContext extends AbstractBaseParam
{
    /**
     * The name of the data catalog used in the query execution.
     *
     * @var string
     */
    public $catalog;

    /**
     * The name of the database used in the query execution.
     *
     * @var string
     */
    public $database;

    /**
     * The database and data catalog context in which the query execution occurs.
     *
     * @param string|null $catalog The name of the data catalog used in the query execution.
     * @param string|null $database The name of the database used in the query execution.
     */
    public function __construct(string $catalog = null, string $database = null)
    {
        $this->catalog = $catalog;
        $this->database = $database;
    }
}
