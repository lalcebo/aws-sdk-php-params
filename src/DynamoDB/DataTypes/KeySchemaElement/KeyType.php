<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 9:39 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes\KeySchemaElement;

class KeyType
{
    /**
     * Internal hash function to evenly distribute data items across partitions.
     * The partition key of an item is also known as its hash attribute. The term
     * "hash attribute" derives from DynamoDB's usage of an internal hash function
     * to evenly distribute data items across partitions, based on their partition
     * key values.
     *
     * @var string
     */
    public const HASH = 'HASH';

    /**
     * Stores items with the same partition key physically close together. The sort key
     * of an item is also known as its range attribute. The term "range attribute"
     * derives from the way DynamoDB stores items with the same partition key physically
     * close together, in sorted order by the sort key value.
     *
     * @var string
     */
    public const RANGE = 'RANGE';
}
