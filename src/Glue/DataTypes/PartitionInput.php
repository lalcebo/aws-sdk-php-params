<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/30/21 12:22 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\AbstractBaseParam;
use Lalcebo\Aws\Params\ListMap;

/**
 * The structure used to create and update a partition.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_PartitionInput.html
 */
class PartitionInput extends AbstractBaseParam
{
    /**
     * Provides information about the physical location where the partition is stored.
     *
     * @var StorageDescriptor
     */
    public $storageDescriptor;

    /**
     * These key-value pairs define partition parameters.
     *
     * @var ListMap
     */
    public $parameters;

    /**
     * The values of the partition. Although this parameter is not required by the SDK,
     * you must specify this parameter for a valid input.
     *
     * The values for the keys for the new partition must be passed as an array of String
     * objects that must be ordered in the same order as the partition keys appearing in
     * the Amazon S3 prefix. Otherwise AWS Glue will add the values to the wrong keys.
     *
     * @var string[]
     */
    public $values;

    /**
     * The last time at which the partition was accessed.
     *
     * @var int
     */
    public $lastAccessTime;

    /**
     * The last time at which column statistics were computed for this partition.
     *
     * @var int
     */
    public $lastAnalyzedTime;

    /**
     * The structure used to create and update a partition.
     *
     * @param StorageDescriptor|null $storageDescriptor Provides information about the physical location
     * where the partition is stored.
     * @param ListMap|null $parameters These key-value pairs define partition parameters.
     * @param string[] $values The values of the partition. Although this parameter is not required by the SDK,
     * you must specify this parameter for a valid input. The values for the keys for the new partition must be
     * passed as an array of String objects that must be ordered in the same order as the partition keys appearing in
     * the Amazon S3 prefix. Otherwise AWS Glue will add the values to the wrong keys.
     * @param int|null $lastAccessTime The last time at which the partition was accessed.
     * @param int|null $lastAnalyzedTime The last time at which column statistics were computed for this partition.
     */
    public function __construct(
        StorageDescriptor $storageDescriptor = null,
        ListMap $parameters = null,
        array $values = null,
        int $lastAccessTime = null,
        int $lastAnalyzedTime = null
    ) {
        $this->storageDescriptor = $storageDescriptor;
        $this->parameters = $parameters;
        $this->values = $values;
        $this->lastAccessTime = $lastAccessTime;
        $this->lastAnalyzedTime = $lastAnalyzedTime;
    }
}
