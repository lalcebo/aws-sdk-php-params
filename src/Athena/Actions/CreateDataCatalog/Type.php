<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:55 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions\CreateDataCatalog;

class Type
{
    /**
     * Federated catalog.
     *
     * @var string
     */
    public const LAMBDA = 'LAMBDA';

    /**
     * External hive metastore.
     *
     * @var string
     */
    public const HIVE = 'HIVE';
}
