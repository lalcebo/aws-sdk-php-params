<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 10:28 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\Actions;

use Lalcebo\Aws\Params\DynamoDB\Actions\CreateTable\BillingMode;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\AttributeDefinition;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\GlobalSecondaryIndex;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\KeySchemaElement;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\LocalSecondaryIndex;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\ProvisionedThroughput;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\SSESpecification;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\StreamSpecification;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\Tag;
use Lalcebo\Aws\Params\Parameter;

/**
 * The CreateTable operation adds a new table to your account. In an AWS account, table names
 * must be unique within each Region. That is, you can have two tables with same name if you
 * create the tables in different Regions.
 *
 * @package Lalcebo\Aws\Params\DynamoDB\Actions
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_CreateTable.html
 */
class CreateTable extends Parameter
{
    /**
     * The name of the table to create.
     *
     * @var string
     */
    public $tableName;

    /**
     * An array of attributes that describe the key schema for the table and indexes.
     *
     * @var AttributeDefinition[]
     */
    public $attributeDefinitions;

    /**
     * Specifies the attributes that make up the primary key for a table or an index. The attributes
     * in KeySchema must also be defined in the AttributeDefinitions array.
     *
     * @var KeySchemaElement[]
     */
    public $keySchema;

    /**
     * Controls how you are charged for read and write throughput and how you manage capacity.
     * This setting can be changed later.
     *
     * @var string
     */
    public $billingMode;

    /**
     * One or more global secondary indexes (the maximum is 20) to be created on the table.
     *
     * @var GlobalSecondaryIndex[]
     */
    public $globalSecondaryIndexes;

    /**
     * One or more local secondary indexes (the maximum is 5) to be created on the table. Each index
     * is scoped to a given partition key value. There is a 10 GB size limit per partition key value;
     * otherwise, the size of a local secondary index is unconstrained.
     *
     * @var LocalSecondaryIndex[]
     */
    public $localSecondaryIndexes;

    /**
     * Represents the provisioned throughput settings for a specified table or index. The settings can be
     * modified using the UpdateTable operation. If you set BillingMode as PROVISIONED, you must specify
     * this property. If you set BillingMode as PAY_PER_REQUEST, you cannot specify this property.
     *
     * @var ProvisionedThroughput
     */
    public $provisionedThroughput;

    /**
     * Represents the settings used to enable server-side encryption.
     *
     * @var SSESpecification
     */
    public $sSESpecification;

    /**
     * The settings for DynamoDB Streams on the table.
     *
     * @var StreamSpecification
     */
    public $streamSpecification;

    /**
     * A list of key-value pairs to label the table.
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * The CreateTable operation adds a new table to your account. In an AWS account, table names
     * must be unique within each Region. That is, you can have two tables with same name if you
     * create the tables in different Regions.
     *
     * @param  string  $tableName  The name of the table to create.
     * @param  AttributeDefinition[]  $attributeDefinitions  An array of attributes that describe the key
     * schema for the table and indexes.
     * @param  KeySchemaElement[]  $keySchema  Specifies the attributes that make up the primary key for a
     * table or an index.
     * @param  string|null  $billingMode  Controls how you are charged for read and write throughput and
     * how you manage capacity.
     * @param  GlobalSecondaryIndex[]  $globalSecondaryIndexes  One or more global secondary indexes
     * (the maximum is 20) to be created on the table.
     * @param  LocalSecondaryIndex[]  $localSecondaryIndexes  One or more local secondary indexes
     * (the maximum is 5) to be created on the table.
     * @param  ProvisionedThroughput|null  $provisionedThroughput  Represents the provisioned throughput
     * settings for a specified table or index.
     * @param  SSESpecification|null  $sSESpecification  Represents the settings used to enable server-side encryption.
     * @param  StreamSpecification|null  $streamSpecification  The settings for DynamoDB Streams on the table.
     * @param  Tag[]  $tags  A list of key-value pairs to label the table.
     *
     * @see BillingMode for the constants available for the $billingMode parameter.
     */
    public function __construct(
        string $tableName,
        array $attributeDefinitions,
        array $keySchema,
        string $billingMode = null,
        array $globalSecondaryIndexes = null,
        array $localSecondaryIndexes = null,
        ProvisionedThroughput $provisionedThroughput = null,
        SSESpecification $sSESpecification = null,
        StreamSpecification $streamSpecification = null,
        array $tags = null
    ) {
        $this->tableName = $tableName;
        $this->attributeDefinitions = $attributeDefinitions;
        $this->keySchema = $keySchema;
        $this->billingMode = $billingMode;
        $this->globalSecondaryIndexes = $globalSecondaryIndexes;
        $this->localSecondaryIndexes = $localSecondaryIndexes;
        $this->provisionedThroughput = $provisionedThroughput;
        $this->sSESpecification = $sSESpecification;
        $this->streamSpecification = $streamSpecification;
        $this->tags = $tags;
    }
}
