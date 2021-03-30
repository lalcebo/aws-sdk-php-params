<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:36 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\Actions;

use Lalcebo\Aws\Params\AbstractBaseParam;
use Lalcebo\Aws\Params\Glue\DataTypes\PartitionIndex;
use Lalcebo\Aws\Params\Glue\DataTypes\TableInput;

/**
 * Creates a new table definition in the Data Catalog.
 *
 * @package Lalcebo\Aws\Params\Glue\Actions
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_CreateTable.html
 */
class CreateTable extends AbstractBaseParam
{
    /**
     * The catalog database in which to create the new table. For Hive compatibility, this name is entirely lowercase.
     *
     * @var string
     */
    public $databaseName;

    /**
     * The TableInput object that defines the metadata table to create in the catalog.
     *
     * @var TableInput
     */
    public $tableInput;

    /**
     * The ID of the Data Catalog in which to create the Table. If none is
     * supplied, the AWS account ID is used by default.
     *
     * @var string
     */
    public $catalogId;

    /**
     * A list of partition indexes, PartitionIndex structures, to create in the table.
     *
     * @var PartitionIndex[]
     */
    public $partitionIndexes;

    /**
     * Creates a new table definition in the Data Catalog.
     *
     * @param string $databaseName
     * @param TableInput $tableInput
     * @param string|null $catalogId
     * @param PartitionIndex[] $partitionIndexes
     */
    public function __construct(
        string $databaseName,
        TableInput $tableInput,
        string $catalogId = null,
        array $partitionIndexes = null
    ) {
        $this->databaseName = $databaseName;
        $this->tableInput = $tableInput;
        $this->catalogId = $catalogId;
        $this->partitionIndexes = $partitionIndexes;
    }
}
