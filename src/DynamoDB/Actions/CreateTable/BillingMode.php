<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 10:30 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\Actions\CreateTable;

class BillingMode
{
    /**
     * Billing mode to Provisioned Mode for predictable workloads.
     *
     * @var string
     */
    public const PROVISIONED = 'PROVISIONED';

    /**
     * Billing mode to On-Demand Mode for unpredictable workloads.
     *
     * @var string
     */
    public const PAY_PER_REQUEST = 'PAY_PER_REQUEST';
}
