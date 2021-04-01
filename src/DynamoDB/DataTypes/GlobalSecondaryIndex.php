<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 1:16 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes;

use Lalcebo\Aws\Params\Parameter;

/**
 * Represents the properties of a global secondary index.
 *
 * @package Lalcebo\Aws\Params\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_GlobalSecondaryIndex.html
 */
class GlobalSecondaryIndex extends Parameter
{
    /**
     * The name of the global secondary index. The name must be unique among all other indexes on this table.
     *
     * @var string
     */
    public $indexName;

    /**
     * The complete key schema for a global secondary index, which consists of one or more pairs of attribute
     * names and key types.
     *
     * @var KeySchemaElement[]
     */
    public $keySchema;

    /**
     * Represents attributes that are copied (projected) from the table into the global secondary index.
     * These are in addition to the primary key attributes and index key attributes, which are automatically projected.
     *
     * @var Projection
     */
    public $projection;

    /**
     * Represents the provisioned throughput settings for the specified global secondary index.
     *
     * @var ProvisionedThroughput
     */
    public $provisionedThroughput;

    /**
     * Represents the properties of a global secondary index.
     *
     * @param string $indexName The name of the global secondary index. The name must be unique among
     * all other indexes on this table.
     * @param KeySchemaElement[] $keySchema The complete key schema for a global secondary index, which consists of
     * one or more pairs of attribute names and key types.
     * @param Projection $projection Represents attributes that are copied (projected) from the table
     * into the global secondary index. These are in addition to the primary key attributes and index
     * key attributes, which are automatically projected.
     * @param ProvisionedThroughput|null $provisionedThroughput Represents the provisioned throughput settings
     * for the specified global secondary index.
     */
    public function __construct(
        string $indexName,
        array $keySchema,
        Projection $projection,
        ProvisionedThroughput $provisionedThroughput = null
    ) {
        $this->indexName = $indexName;
        $this->keySchema = $keySchema;
        $this->projection = $projection;
        $this->provisionedThroughput = $provisionedThroughput;
    }
}
