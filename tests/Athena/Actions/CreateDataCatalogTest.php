<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 1:20 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\CreateDataCatalog;
use Lalcebo\Aws\Params\Athena\DataTypes\Tag;
use Lalcebo\Aws\Params\ListMap;
use PHPUnit\Framework\TestCase;

class CreateDataCatalogTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new CreateDataCatalog(
            'string',
            CreateDataCatalog\Type::HIVE,
            [
                new Tag('string', 'string')
            ],
            new ListMap(['string' => 'string']),
            'string'
        );

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "Description": "string",
                   "Name": "string",
                   "Parameters": {
                      "string" : "string"
                   },
                   "Tags": [
                      {
                         "Key": "string",
                         "Value": "string"
                      }
                   ],
                   "Type": "HIVE"
                }
            ',
            $params->toJson()
        );
    }
}
