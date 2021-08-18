<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 9:40 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes;

use Lalcebo\Aws\Params\Parameter;

/**
 * Represents the provisioned throughput settings for a specified table or index. The settings
 * can be modified using the UpdateTable operation.
 *
 * @package Lalcebo\Aws\Params\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_ProvisionedThroughput.html
 */
class ProvisionedThroughput extends Parameter
{
    /**
     * The maximum number of strongly consistent reads consumed per second before DynamoDB returns
     * a ThrottlingException.
     *
     * @var int
     */
    public $readCapacityUnits;

    /**
     * The maximum number of writes consumed per second before DynamoDB returns a ThrottlingException.
     *
     * @var int
     */
    public $writeCapacityUnits;

    /**
     * Represents the provisioned throughput settings for a specified table or index. The settings
     * can be modified using the UpdateTable operation.
     *
     * @param  int  $readCapacityUnits  The maximum number of strongly consistent reads consumed per
     * second before DynamoDB returns a ThrottlingException.
     * @param  int  $writeCapacityUnits  The maximum number of writes consumed per second before DynamoDB
     * returns a ThrottlingException.
     */
    public function __construct(int $readCapacityUnits, int $writeCapacityUnits)
    {
        $this->readCapacityUnits = int_in_range($readCapacityUnits, 0, 1);
        $this->writeCapacityUnits = int_in_range($writeCapacityUnits, 0, 1);
    }
}
