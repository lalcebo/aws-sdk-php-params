<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 1:15 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes\AttributeDefinition;

class AttributeType
{
    /**
     * Attribute is of type String
     *
     * @var string
     */
    public const STRING = 'S';

    /**
     * Attribute is of type Number
     *
     * @var string
     */
    public const NUMBER = 'N';

    /**
     * Attribute is of type Binary
     *
     * @var string
     */
    public const BINARY = 'B';
}
