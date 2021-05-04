<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 10:29 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\DynamoDB\Actions;

use Lalcebo\Aws\Params\DynamoDB\Actions\CreateTable;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\AttributeDefinition;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\GlobalSecondaryIndex;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\KeySchemaElement;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\LocalSecondaryIndex;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\Projection;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\ProvisionedThroughput;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\SSESpecification;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\StreamSpecification;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\Tag;
use PHPUnit\Framework\TestCase;

class CreateTableTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new CreateTable(
            'string',
            [
                new AttributeDefinition('string', AttributeDefinition\AttributeType::STRING)
            ],
            [
                new KeySchemaElement('string', KeySchemaElement\KeyType::HASH)
            ],
            'string',
            [
                new GlobalSecondaryIndex(
                    'string',
                    [
                        new KeySchemaElement('string', KeySchemaElement\KeyType::HASH)
                    ],
                    new Projection(['string'], Projection\ProjectionType::ALL),
                    new ProvisionedThroughput(1, 1)
                )
            ],
            [
                new LocalSecondaryIndex(
                    'string',
                    [
                        new KeySchemaElement('string', KeySchemaElement\KeyType::HASH)
                    ],
                    new Projection(['string'], Projection\ProjectionType::ALL)
                )
            ],
            new ProvisionedThroughput(1, 1),
            new SSESpecification(true, 'string', SSESpecification\SSEType::AES256),
            new StreamSpecification(true, StreamSpecification\StreamViewType::KEYS_ONLY),
            [
                new Tag('string', 'string')
            ]
        );

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "AttributeDefinitions": [
                      {
                         "AttributeName": "string",
                         "AttributeType": "S"
                      }
                   ],
                   "BillingMode": "string",
                   "GlobalSecondaryIndexes": [
                      {
                         "IndexName": "string",
                         "KeySchema": [
                            {
                               "AttributeName": "string",
                               "KeyType": "HASH"
                            }
                         ],
                         "Projection": {
                            "NonKeyAttributes": [ "string" ],
                            "ProjectionType": "ALL"
                         },
                         "ProvisionedThroughput": {
                            "ReadCapacityUnits": 1,
                            "WriteCapacityUnits": 1
                         }
                      }
                   ],
                   "KeySchema": [
                      {
                         "AttributeName": "string",
                         "KeyType": "HASH"
                      }
                   ],
                   "LocalSecondaryIndexes": [
                      {
                         "IndexName": "string",
                         "KeySchema": [
                            {
                               "AttributeName": "string",
                               "KeyType": "HASH"
                            }
                         ],
                         "Projection": {
                            "NonKeyAttributes": [ "string" ],
                            "ProjectionType": "ALL"
                         }
                      }
                   ],
                   "ProvisionedThroughput": {
                      "ReadCapacityUnits": 1,
                      "WriteCapacityUnits": 1
                   },
                   "SSESpecification": {
                      "Enabled": true,
                      "KMSMasterKeyId": "string",
                      "SSEType": "AES256"
                   },
                   "StreamSpecification": {
                      "StreamEnabled": true,
                      "StreamViewType": "KEYS_ONLY"
                   },
                   "TableName": "string",
                   "Tags": [
                      {
                         "Key": "string",
                         "Value": "string"
                      }
                   ]
                }
            ',
            $params->toJson()
        );
    }
}
