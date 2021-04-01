<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 9:33 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes;

use Lalcebo\Aws\Params\Parameter;

/**
 * Represents the properties of a local secondary index.
 *
 * @package Lalcebo\Aws\Params\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_LocalSecondaryIndex.html
 */
class LocalSecondaryIndex extends Parameter
{
    /**
     * The name of the global secondary index. The name must be unique among all other indexes on this table.
     *
     * @var string
     */
    public $indexName;

    /**
     * The complete key schema for a global secondary index.
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
     * Represents the properties of a local secondary index.
     *
     * @param  string  $indexName  The name of the global secondary index. The name must be unique among all
     * other indexes on this table.
     * @param  KeySchemaElement[]  $keySchema  The complete key schema for a global secondary index.
     * @param  Projection  $projection  Represents attributes that are copied (projected) from the table into
     * the global secondary index. These are in addition to the primary key attributes and index key attributes,
     * which are automatically projected.
     */
    public function __construct(
        string $indexName,
        array $keySchema,
        Projection $projection
    ) {
        $this->indexName = $indexName;
        $this->keySchema = $keySchema;
        $this->projection = $projection;
    }
}
