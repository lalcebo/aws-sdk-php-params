<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:22 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\AbstractBaseParam;

/**
 * A structure that describes a target table for resource linking.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_TableIdentifier.html
 */
class TableIdentifier extends AbstractBaseParam
{
    /**
     * The ID of the Data Catalog in which the table resides.
     *
     * @var string
     */
    public $catalogId;

    /**
     * The name of the catalog database that contains the target table.
     *
     * @var string
     */
    public $databaseName;

    /**
     * The name of the target table.
     *
     * @var string
     */
    public $name;

    /**
     * A structure that describes a target table for resource linking.
     *
     * @param string|null $catalogId The ID of the Data Catalog in which the table resides.
     * @param string|null $databaseName The name of the catalog database that contains the target table.
     * @param string|null $name The name of the target table.
     */
    public function __construct(string $catalogId = null, string $databaseName = null, string $name = null)
    {
        $this->catalogId = $catalogId;
        $this->databaseName = $databaseName;
        $this->name = $name;
    }
}
