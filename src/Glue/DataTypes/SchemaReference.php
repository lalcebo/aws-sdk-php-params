<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:16 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\Parameter;

/**
 * An object that references a schema stored in the AWS Glue Schema Registry.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_SchemaReference.html
 */
class SchemaReference extends Parameter
{
    /**
     * A structure that contains schema identity fields. Either this or the SchemaVersionId has to be provided.
     *
     * @var SchemaId
     */
    public $schemaId;

    /**
     * The unique ID assigned to a version of the schema. Either this or the SchemaId has to be provided.
     *
     * @var string
     */
    public $schemaVersionId;

    /**
     * The version number of the schema.
     *
     * @var int
     */
    public $schemaVersionNumber;

    /**
     * An object that references a schema stored in the AWS Glue Schema Registry.
     *
     * @param SchemaId|null $schemaId A structure that contains schema identity fields. Either this
     * or the SchemaVersionId has to be provided.
     * @param string|null $schemaVersionId The unique ID assigned to a version of the schema. Either
     * this or the SchemaId has to be provided.
     * @param int|null $schemaVersionNumber The version number of the schema.
     */
    public function __construct(
        SchemaId $schemaId = null,
        string $schemaVersionId = null,
        int $schemaVersionNumber = null
    ) {
        $this->schemaId = $schemaId;
        $this->schemaVersionId = $schemaVersionId;
        $this->schemaVersionNumber = int_in_range($schemaVersionNumber, 1, 100000);
    }
}
