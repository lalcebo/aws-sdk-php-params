<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:14 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\AbstractBaseParam;

/**
 * The unique ID of the schema in the AWS Glue schema registry.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_SchemaId.html
 */
class SchemaId extends AbstractBaseParam
{
    /**
     * The Amazon Resource Name (ARN) of the schema. One of SchemaArn or SchemaName has to be provided.
     *
     * @var string
     */
    public $schemaArn;

    /**
     * The name of the schema. One of SchemaArn or SchemaName has to be provided.
     *
     * @var string
     */
    public $schemaName;

    /**
     * The name of the schema registry that contains the schema.
     *
     * @var string
     */
    public $registryName;

    /**
     * The unique ID of the schema in the AWS Glue schema registry.
     *
     * @param string|null $schemaArn  The Amazon Resource Name (ARN) of the schema. One of SchemaArn
     * or SchemaName has to be provided.
     * @param string|null $schemaName The name of the schema. One of SchemaArn or SchemaName has to be provided.
     * @param string|null $registryName The name of the schema registry that contains the schema.
     */
    public function __construct(string $schemaArn = null, string $schemaName = null, string $registryName = null)
    {
        $this->schemaArn = $schemaArn;
        $this->schemaName = $schemaName;
        $this->registryName = $registryName;
    }
}
