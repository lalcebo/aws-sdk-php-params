<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:20 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\ListMap;
use Lalcebo\Aws\Params\Parameter;

/**
 * Describes the physical storage of table data.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_StorageDescriptor.html
 */
class StorageDescriptor extends Parameter
{
    /**
     * A list of the Columns in the table.
     *
     * @var Column[]
     */
    public $columns;

    /**
     * A list of reducer grouping columns, clustering columns, and bucketing columns in the table.
     *
     * @var string[]
     */
    public $bucketColumns;

    /**
     * True if the data in the table is compressed, or False if not.
     *
     * @var bool
     */
    public $compressed;

    /**
     * The input format: SequenceFileInputFormat (binary), or TextInputFormat, or a custom format.
     *
     * @var string
     */
    public $inputFormat;

    /**
     * The physical location of the table. By default, this takes the form of the warehouse
     * location, followed by the database location in the warehouse, followed by the table name.
     *
     * @var string
     */
    public $location;

    /**
     * Must be specified if the table contains any dimension columns.
     *
     * @var int
     */
    public $numberOfBuckets;

    /**
     * The output format: SequenceFileOutputFormat (binary), or IgnoreKeyTextOutputFormat,
     * or a custom format.
     *
     * @var string
     */
    public $outputFormat;

    /**
     * @var ListMap
     */
    public $parameters;

    /**
     * An object that references a schema stored in the AWS Glue Schema Registry. When creating
     * a table, you can pass an empty list of columns for the schema, and instead use a schema reference.
     *
     * @var SchemaReference
     */
    public $schemaReference;

    /**
     * The serialization/deserialization (SerDe) information.
     *
     * @var SerDeInfo
     */
    public $serdeInfo;

    /**
     * The information about values that appear frequently in a column (skewed values).
     *
     * @var SkewedInfo
     */
    public $skewedInfo;

    /**
     * A list specifying the sort order of each bucket in the table.
     *
     * @var Order[]
     */
    public $sortColumns;

    /**
     * True if the table data is stored in subdirectories, or False if not.
     *
     * @var bool
     */
    public $storedAsSubDirectories;

    /**
     * Describes the physical storage of table data.
     *
     * @param Column[] $columns A list of the Columns in the table.
     * @param string[] $bucketColumns A list of reducer grouping columns, clustering columns,
     * and bucketing columns in the table.
     * @param bool|null $compressed True if the data in the table is compressed, or False if not.
     * @param string|null $inputFormat The input format: SequenceFileInputFormat (binary),
     * or TextInputFormat, or a custom format.
     * @param string|null $location The physical location of the table. By default, this
     * takes the form of the warehouse location, followed by the database location in the
     * warehouse, followed by the table name.
     * @param int|null $numberOfBuckets Must be specified if the table contains any dimension columns.
     * @param string|null $outputFormat The output format: SequenceFileOutputFormat (binary), or
     * IgnoreKeyTextOutputFormat, or a custom format.
     * @param ListMap|null $parameters The user-supplied properties in key-value form.
     * @param SchemaReference|null $schemaReference An object that references a schema stored
     * in the AWS Glue Schema Registry.
     * @param SerDeInfo|null $serdeInfo The serialization/deserialization (SerDe) information.
     * @param SkewedInfo|null $skewedInfo The information about values that appear frequently
     * in a column (skewed values).
     * @param Order[] $sortColumns A list specifying the sort order of each bucket in the table.
     * @param bool|null $storedAsSubDirectories True if the table data is stored in subdirectories, or False if not.
     */
    public function __construct(
        array $columns = null,
        array $bucketColumns = null,
        bool $compressed = null,
        string $inputFormat = null,
        string $location = null,
        int $numberOfBuckets = null,
        string $outputFormat = null,
        ListMap $parameters = null,
        SchemaReference $schemaReference = null,
        SerDeInfo $serdeInfo = null,
        SkewedInfo $skewedInfo = null,
        array $sortColumns = null,
        bool $storedAsSubDirectories = null
    ) {
        $this->columns = $columns;
        $this->bucketColumns = $bucketColumns;
        $this->compressed = $compressed;
        $this->inputFormat = $inputFormat;
        $this->location = $location;
        $this->numberOfBuckets = $numberOfBuckets;
        $this->outputFormat = $outputFormat;
        $this->parameters = $parameters;
        $this->schemaReference = $schemaReference;
        $this->serdeInfo = $serdeInfo;
        $this->skewedInfo = $skewedInfo;
        $this->sortColumns = $sortColumns;
        $this->storedAsSubDirectories = $storedAsSubDirectories;
    }
}
