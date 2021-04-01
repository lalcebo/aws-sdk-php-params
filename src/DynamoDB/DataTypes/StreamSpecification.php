<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 9:56 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes;

use Lalcebo\Aws\Params\DynamoDB\DataTypes\StreamSpecification\StreamViewType;
use Lalcebo\Aws\Params\Parameter;

/**
 * Represents the DynamoDB Streams configuration for a table in DynamoDB.
 *
 * @package Lalcebo\Aws\Params\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_StreamSpecification.html
 */
class StreamSpecification extends Parameter
{
    /**
     * Indicates whether DynamoDB Streams is enabled (true) or disabled (false) on the table.
     *
     * @var bool
     */
    public $streamEnabled;

    /**
     * When an item in the table is modified, StreamViewType determines what information is written to the stream
     * for this table.
     *
     * @var string
     */
    public $streamViewType;

    /**
     * Represents the DynamoDB Streams configuration for a table in DynamoDB.
     *
     * @param  bool  $streamEnabled  Indicates whether DynamoDB Streams is enabled (true)
     * or disabled (false)on the table.
     * @param  string|null  $streamViewType  When an item in the table is modified, StreamViewType determines what
     * information is written to the stream for this table.
     *
     * @see StreamViewType for the constants available for the $streamViewType parameter.
     */
    public function __construct(bool $streamEnabled, string $streamViewType = null)
    {
        $this->streamEnabled = $streamEnabled;
        $this->streamViewType = strtoupper($streamViewType);
    }
}
