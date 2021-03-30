<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/30/21 12:18 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Glue\Actions;

use Lalcebo\Aws\Params\Glue\Actions\CreatePartition;
use Lalcebo\Aws\Params\Glue\DataTypes\Column;
use Lalcebo\Aws\Params\Glue\DataTypes\Order;
use Lalcebo\Aws\Params\Glue\DataTypes\PartitionInput;
use Lalcebo\Aws\Params\Glue\DataTypes\SchemaId;
use Lalcebo\Aws\Params\Glue\DataTypes\SchemaReference;
use Lalcebo\Aws\Params\Glue\DataTypes\SerDeInfo;
use Lalcebo\Aws\Params\Glue\DataTypes\SkewedInfo;
use Lalcebo\Aws\Params\Glue\DataTypes\StorageDescriptor;
use Lalcebo\Aws\Params\ListMap;
use PHPUnit\Framework\TestCase;

class CreatePartitionTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new CreatePartition(
            'string',
            'string',
            new PartitionInput(
                new StorageDescriptor(
                    [
                        new Column(
                            'string',
                            'string',
                            'string',
                            new ListMap(['string' => 'string'])
                        )
                    ],
                    [ 'string' ],
                    true,
                    'string',
                    'string',
                    0,
                    'string',
                    new ListMap(['string' => 'string']),
                    new SchemaReference(
                        new SchemaId(
                            'string',
                            'string',
                            'string'
                        ),
                        'string',
                        2
                    ),
                    new SerDeInfo(
                        'string',
                        'string',
                        new ListMap(['string' => 'string'])
                    ),
                    new SkewedInfo(
                        ['string'],
                        ['string'],
                        new ListMap(['string' => 'string'])
                    ),
                    [
                        new Order('string', Order\SortOrder::DESC)
                    ],
                    false
                ),
                new ListMap(['string' => 'string']),
                ['string'],
                1617078047,
                1617078058
            ),
            'string'
        );

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "CatalogId": "string",
                   "DatabaseName": "string",
                   "PartitionInput": {
                      "LastAccessTime": 1617078047,
                      "LastAnalyzedTime": 1617078058,
                      "Parameters": {
                         "string" : "string"
                      },
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
                         "Compressed": true,
                         "InputFormat": "string",
                         "Location": "string",
                         "NumberOfBuckets": 0,
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
                            "SchemaVersionNumber": 2
                         },
                         "SerdeInfo": {
                            "Name": "string",
                            "Parameters": {
                               "string" : "string"
                            },
                            "SerializationLibrary": "string"
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
                               "SortOrder": 0
                            }
                         ],
                         "StoredAsSubDirectories": false
                      },
                      "Values": [ "string" ]
                   },
                   "TableName": "string"
                }
            ',
            $params->toJson()
        );
    }
}
