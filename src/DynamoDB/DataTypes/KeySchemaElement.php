<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 9:35 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes;

use Lalcebo\Aws\Params\DynamoDB\DataTypes\KeySchemaElement\KeyType;
use Lalcebo\Aws\Params\Parameter;

/**
 * Represents a single element of a key schema. A key schema specifies the attributes that make up the
 * primary key of a table, or the key attributes of an index.
 *
 * @package Lalcebo\Aws\Params\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_KeySchemaElement.html
 */
class KeySchemaElement extends Parameter
{
    /**
     * The name of a key attribute.
     *
     * @var string
     */
    public $attributeName;

    /**
     * The role that this key attribute will assume.
     *
     * @var string
     */
    public $keyType;

    /**
     * Represents a single element of a key schema. A key schema specifies the attributes that make up the
     * primary key of a table, or the key attributes of an index.
     *
     * @param  string  $attributeName  The name of a key attribute.
     * @param  string  $keyType  The role that this key attribute will assume.
     *
     * @see KeyType for the constants available for the $keyType parameter.
     */
    public function __construct(string $attributeName, string $keyType)
    {
        $this->attributeName = $attributeName;
        $this->keyType = strtoupper($keyType);
    }
}
