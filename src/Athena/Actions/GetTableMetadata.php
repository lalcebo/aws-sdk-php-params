<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 10:53 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\AbstractBaseParam;

/**
 * Returns table metadata for the specified catalog, database, and table.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_GetTableMetadata.html
 */
class GetTableMetadata extends AbstractBaseParam
{
    /**
     * The name of the data catalog that contains the database and table metadata to return.
     *
     * @var string
     */
    public $catalogName;

    /**
     * The name of the database that contains the table metadata to return.
     *
     * @var string
     */
    public $databaseName;

    /**
     * The name of the table for which metadata is returned.
     *
     * @var string
     */
    public $tableName;

    /**
     * Returns table metadata for the specified catalog, database, and table.
     *
     * @param  string  $catalogName  The name of the data catalog that contains the database and
     * table metadata to return.
     * @param  string  $databaseName  The name of the database that contains the table metadata to return.
     * @param  string  $tableName  The name of the table for which metadata is returned.
     */
    public function __construct(string $catalogName, string $databaseName, string $tableName)
    {
        $this->catalogName = $catalogName;
        $this->databaseName = $databaseName;
        $this->tableName = $tableName;
    }
}
