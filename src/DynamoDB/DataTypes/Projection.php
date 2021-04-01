<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 9:36 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes;

use Lalcebo\Aws\Params\DynamoDB\DataTypes\Projection\ProjectionType;
use Lalcebo\Aws\Params\Parameter;

/**
 * Represents attributes that are copied (projected) from the table into an index. These are in addition
 * to the primary key attributes and index key attributes, which are automatically projected.
 *
 * @package Lalcebo\Aws\Params\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_Projection.html
 */
class Projection extends Parameter
{
    /**
     * Represents the non-key attribute names which will be projected into the index.
     *
     * @var string[]
     */
    public $nonKeyAttributes;

    /**
     * The set of attributes that are projected into the index.
     *
     * @var string
     */
    public $projectionType;

    /**
     * Represents attributes that are copied (projected) from the table into an index. These are in addition
     * to the primary key attributes and index key attributes, which are automatically projected.
     *
     * @param  string[]|null  $nonKeyAttributes
     * @param  string|null  $projectionType
     *
     * @see ProjectionType for the constants available for the $projectionType parameter.
     */
    public function __construct(array $nonKeyAttributes = null, string $projectionType = null)
    {
        $this->nonKeyAttributes = $nonKeyAttributes;
        $this->projectionType = strtoupper((string)$projectionType);
    }
}
