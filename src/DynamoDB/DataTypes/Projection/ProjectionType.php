<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 9:38 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes\Projection;

class ProjectionType
{
    /**
     * All of the table attributes are projected into the index.
     *
     * @var string
     */
    public const ALL = 'ALL';

    /**
     * Only the index and primary keys are projected into the index.
     *
     * @var string
     */
    public const KEYS_ONLY = 'KEYS_ONLY';

    /**
     * In addition to the attributes described in KEYS_ONLY, the secondary index will include
     * other non-key attributes that you specify.
     *
     * @var string
     */
    public const INCLUDE = 'INCLUDE';
}
