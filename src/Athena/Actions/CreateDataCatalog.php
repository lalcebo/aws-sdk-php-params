<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:53 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\Parameter;
use Lalcebo\Aws\Params\Athena\Actions\CreateDataCatalog\Type;
use Lalcebo\Aws\Params\Athena\DataTypes\Tag;
use Lalcebo\Aws\Params\ListMap;

/**
 * Creates (registers) a data catalog with the specified name and properties.
 * Catalogs created are visible to all users of the same AWS account.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_CreateDataCatalog.html
 */
class CreateDataCatalog extends Parameter
{
    /**
     * The name of the data catalog to create. The catalog name must be unique for the AWS account
     * and can use a maximum of 128 alphanumeric, underscore, at sign, or hyphen characters.
     *
     * @var string
     */
    public $name;

    /**
     * A list of comma separated tags to add to the data catalog that is created.
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * The type of data catalog to create: LAMBDA for a federated catalog or HIVE for an external hive metastore.
     *
     * @var string
     */
    public $type;

    /**
     * Specifies the Lambda function or functions to use for creating the data catalog. This is a mapping whose
     * values depend on the catalog type.
     *
     * @var ListMap
     */
    public $parameters;

    /**
     * A description of the data catalog to be created.
     *
     * @var string
     */
    public $description;

    /**
     * Creates (registers) a data catalog with the specified name and properties. Catalogs created
     * are visible to all users of the same AWS account.
     *
     * @param  string  $name  The name of the data catalog to create. The catalog name must be unique for the AWS
     * account and can use a maximum of 128 alphanumeric, underscore, at sign, or hyphen characters.
     * @param  string  $type  The type of data catalog to create: LAMBDA for a federated catalog or HIVE for an
     * external hive metastore.
     * @param  Tag[]|null  $tags  A list of comma separated tags to add to the data catalog that is created.
     * @param  ListMap|null  $parameters  Specifies the Lambda function or functions to use for creating
     * the data catalog. This is a mapping whose values depend on the catalog type.
     * @param  string|null  $description  A description of the data catalog to be created.
     *
     * @see Type for the constants available for the $type parameter.
     */
    public function __construct(
        string $name,
        string $type,
        array $tags = null,
        ListMap $parameters = null,
        string $description = null
    ) {
        $this->name = $name;
        $this->type = strtoupper($type);
        $this->tags = $tags;
        $this->parameters = $parameters;
        $this->description = $description;
    }
}
