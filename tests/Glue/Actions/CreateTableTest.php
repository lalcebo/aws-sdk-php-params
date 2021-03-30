<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:37 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Glue\Actions;

use Lalcebo\Aws\Params\Glue\Actions\CreateTable;
use Lalcebo\Aws\Params\Glue\DataTypes\Column;
use Lalcebo\Aws\Params\Glue\DataTypes\Order;
use Lalcebo\Aws\Params\Glue\DataTypes\PartitionIndex;
use Lalcebo\Aws\Params\Glue\DataTypes\SchemaId;
use Lalcebo\Aws\Params\Glue\DataTypes\SchemaReference;
use Lalcebo\Aws\Params\Glue\DataTypes\SerDeInfo;
use Lalcebo\Aws\Params\Glue\DataTypes\SkewedInfo;
use Lalcebo\Aws\Params\Glue\DataTypes\StorageDescriptor;
use Lalcebo\Aws\Params\Glue\DataTypes\TableIdentifier;
use Lalcebo\Aws\Params\Glue\DataTypes\TableInput;
use Lalcebo\Aws\Params\ListMap;
use PHPUnit\Framework\TestCase;

class CreateTableTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new CreateTable(
            'string',
            new TableInput(
                'string',
                'string',
                1616992704,
                1616992710,
                'string',
                new ListMap(['string' => 'string']),
                [
                    new Column(
                        'string',
                        'string',
                        'string',
                        new ListMap(['string' => 'string'])
                    )
                ],
                5,
                new StorageDescriptor(
                    [
                        new Column(
                            'string',
                            'string',
                            'string',
                            new ListMap(['string' => 'string'])
                        )
                    ],
                    ['string'],
                    false,
                    'string',
                    'string',
                    2,
                    'string',
                    new ListMap(['string' => 'string']),
                    new SchemaReference(
                        new SchemaId(
                            'string',
                            'string',
                            'string'
                        ),
                        'string',
                        1,
                    ),
                    new SerDeInfo(
                        'string',
                        SerDeInfo\SerializationLibrary::OPEN_CSV,
                        new ListMap(['string' => 'string'])
                    ),
                    new SkewedInfo(
                        ['string'],
                        ['string'],
                        new ListMap(['string' => 'string'])
                    ),
                    [
                        new Order('string', Order\SortOrder::ASC)
                    ],
                    true
                ),
                'string',
                new TableIdentifier(
                    'string',
                    'string',
                    'string'
                ),
                'string',
                'string'
            ),
            'string',
            [
                new PartitionIndex('string', ['string'])
            ]
        );

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "CatalogId": "string",
                   "DatabaseName": "string",
                   "PartitionIndexes": [
                      {
                         "IndexName": "string",
                         "Keys": [ "string" ]
                      }
                   ],
                   "TableInput": {
                      "Description": "string",
                      "LastAccessTime": 1616992704,
                      "LastAnalyzedTime": 1616992710,
                      "Name": "string",
                      "Owner": "string",
                      "Parameters": {
                         "string" : "string"
                      },
                      "PartitionKeys": [
                         {
                            "Comment": "string",
                            "Name": "string",
                            "Parameters": {
                               "string" : "string"
                            },
                            "Type": "string"
                         }
                      ],
                      "Retention": 5,
                      "StorageDescriptor": {
                         "BucketColumns": [ "string" ],
                         "Columns": [
                            {
                               "Comment": "string",
                               "Name": "string",
                               "Parameters": {
                                  "string" : "string"
                               },
                               "Type": "string"
                            }
                         ],
                         "Compressed": false,
                         "InputFormat": "string",
                         "Location": "string",
                         "NumberOfBuckets": 2,
                         "OutputFormat": "string",
                         "Parameters": {
                            "string" : "string"
                         },
                         "SchemaReference": {
                            "SchemaId": {
                               "RegistryName": "string",
                               "SchemaArn": "string",
                               "SchemaName": "string"
                            },
                            "SchemaVersionId": "string",
                            "SchemaVersionNumber": 1
                         },
                         "SerdeInfo": {
                            "Name": "string",
                            "Parameters": {
                               "string" : "string"
                            },
                            "SerializationLibrary": "org.apache.hadoop.hive.serde2.OpenCSVSerde"
                         },
                         "SkewedInfo": {
                            "SkewedColumnNames": [ "string" ],
                            "SkewedColumnValueLocationMaps": {
                               "string" : "string"
                            },
                            "SkewedColumnValues": [ "string" ]
                         },
                         "SortColumns": [
                            {
                               "Column": "string",
                               "SortOrder": 1
                            }
                         ],
                         "StoredAsSubDirectories": true
                      },
                      "TableType": "string",
                      "TargetTable": {
                         "CatalogId": "string",
                         "DatabaseName": "string",
                         "Name": "string"
                      },
                      "ViewExpandedText": "string",
                      "ViewOriginalText": "string"
                   }
                }
            ',
            $params->toJson()
        );
    }
}
