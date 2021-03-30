<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 1:14 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes;

use Lalcebo\Aws\Params\AbstractBaseParam;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\AttributeDefinition\AttributeType;

/**
 * Represents an attribute for describing the key schema for the table and indexes.
 *
 * @package Lalcebo\Aws\Params\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_AttributeDefinition.html
 */
class AttributeDefinition extends AbstractBaseParam
{
    /**
     * A name for the attribute.
     *
     * @var string
     */
    public $attributeName;

    /**
     * The data type for the attribute.
     *
     * @var string
     */
    public $attributeType;

    /**
     * Represents an attribute for describing the key schema for the table and indexes.
     *
     * @param  string  $attributeName  A name for the attribute.
     * @param  string  $attributeType  The data type for the attribute.
     *
     * @see AttributeType for the constants available for the $attributeType parameter.
     */
    public function __construct(string $attributeName, string $attributeType)
    {
        $this->attributeName = $attributeName;
        $this->attributeType = strtoupper($attributeType);
    }
}
