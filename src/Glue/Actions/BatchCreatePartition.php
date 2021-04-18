<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/30/21 12:49 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\Actions;

use Lalcebo\Aws\Params\Glue\DataTypes\PartitionInput;
use Lalcebo\Aws\Params\Parameter;

/**
 * Creates one or more partitions in a batch operation.
 *
 * @package Lalcebo\Aws\Params\Glue\Actions
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_BatchCreatePartition.html
 */
class BatchCreatePartition extends Parameter
{
    /**
     * The name of the metadata database in which the partition is to be created.
     *
     * @var string
     */
    public $databaseName;

    /**
     * The name of the metadata table in which the partition is to be created.
     *
     * @var string
     */
    public $tableName;

    /**
     * A list of PartitionInput structures that define the partitions to be created.
     *
     * @var PartitionInput[]
     */
    public $partitionInputList;

    /**
     * The ID of the catalog in which the partition is to be created. Currently, this
     * should be the AWS account ID.
     *
     * @var string
     */
    public $catalogId;

    /**
     * Creates one or more partitions in a batch operation.
     *
     * @param string $databaseName The name of the metadata database in which the partition is to be created.
     * @param string $tableName The name of the metadata table in which the partition is to be created.
     * @param PartitionInput[] $partitionInputList A list of PartitionInput structures that define the
     * partitions to be created.
     * @param string|null $catalogId The ID of the catalog in which the partition is to be created. Currently, this
     * should be the AWS account ID.
     */
    public function __construct(
        string $databaseName,
        string $tableName,
        array $partitionInputList,
        string $catalogId = null
    ) {
        $this->databaseName = $databaseName;
        $this->tableName = $tableName;
        $this->partitionInputList = $partitionInputList;
        $this->catalogId = $catalogId;
    }
}
