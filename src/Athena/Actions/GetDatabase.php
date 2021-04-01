<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 10:44 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\Parameter;

/**
 * Returns a database object for the specified database and data catalog.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_GetDatabase.html
 */
class GetDatabase extends Parameter
{
    /**
     * The name of the data catalog that contains the database to return.
     *
     * @var string
     */
    public $catalogName;

    /**
     * The name of the database to return.
     *
     * @var string
     */
    public $databaseName;

    /**
     * Returns a database object for the specified database and data catalog.
     *
     * @param  string  $catalogName  The name of the data catalog that contains the database to return.
     * @param  string  $databaseName  The name of the database to return.
     */
    public function __construct(string $catalogName, string $databaseName)
    {
        $this->catalogName = $catalogName;
        $this->databaseName = $databaseName;
    }
}
