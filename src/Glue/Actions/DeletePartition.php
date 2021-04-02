<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/1/21 11:02 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\Actions;

use Lalcebo\Aws\Params\Parameter;

/**
 * Deletes a specified partition.
 *
 * @package Lalcebo\Aws\Params\Glue\Actions
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_DeletePartition.html
 */
class DeletePartition extends Parameter
{
    /**
     * The name of the catalog database in which the table in question resides.
     *
     * @var string
     */
    public $databaseName;

    /**
     * The name of the table that contains the partition to be deleted.
     *
     * @var string
     */
    public $tableName;

    /**
     * The values that define the partition.
     *
     * @var string[]
     */
    public $partitionValues;

    /**
     * The ID of the Data Catalog where the partition to be deleted resides.
     * If none is provided, the AWS account ID is used by default.
     *
     * @var string
     */
    public $catalogId;

    /**
     * Deletes a specified partition.
     *
     * @param string $databaseName The name of the catalog database in which the table in question resides.
     * @param string $tableName The name of the table that contains the partition to be deleted.
     * @param string[] $partitionValues The values that define the partition.
     * @param string|null $catalogId The ID of the Data Catalog where the partition to be deleted resides.
     * If none is provided, the AWS account ID is used by default.
     */
    public function __construct(
        string $databaseName,
        string $tableName,
        array $partitionValues,
        string $catalogId = null
    ) {
        $this->databaseName = $databaseName;
        $this->tableName = $tableName;
        $this->partitionValues = $partitionValues;
        $this->catalogId = $catalogId;
    }
}
