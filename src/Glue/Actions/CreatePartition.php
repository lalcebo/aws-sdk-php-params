<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/30/21 12:21 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\Actions;

use Lalcebo\Aws\Params\AbstractBaseParam;
use Lalcebo\Aws\Params\Glue\DataTypes\PartitionInput;

/**
 * Creates a new partition.
 *
 * @package Lalcebo\Aws\Params\Glue\Actions
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_CreatePartition.html
 */
class CreatePartition extends AbstractBaseParam
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
     * A PartitionInput structure defining the partition to be created.
     *
     * @var PartitionInput
     */
    public $partitionInput;

    /**
     * The AWS account ID of the catalog in which the partition is to be created.
     *
     * @var string
     */
    public $catalogId;

    /**
     * Creates a new partition.
     *
     * @param string $databaseName The name of the metadata database in which the partition is to be created.
     * @param string $tableName The name of the metadata table in which the partition is to be created.
     * @param PartitionInput $partitionInput A PartitionInput structure defining the partition to be created.
     * @param string|null $catalogId The AWS account ID of the catalog in which the partition is to be created.
     */
    public function __construct(
        string $databaseName,
        string $tableName,
        PartitionInput $partitionInput,
        string $catalogId = null
    ) {
        $this->databaseName = $databaseName;
        $this->tableName = $tableName;
        $this->partitionInput = $partitionInput;
        $this->catalogId = $catalogId;
    }
}
