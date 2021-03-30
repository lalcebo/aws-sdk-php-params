<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:04 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\ListDatabases;
use PHPUnit\Framework\TestCase;

class ListDatabasesTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new ListDatabases('string', 45, 'string');

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "CatalogName": "string",
                   "MaxResults": 45,
                   "NextToken": "string"
                }
            ',
            $params->toJson()
        );
    }
}
