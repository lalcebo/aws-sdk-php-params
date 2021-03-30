<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 10:46 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\GetDatabase;
use PHPUnit\Framework\TestCase;

class GetDatabaseTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new GetDatabase('string', 'string');

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "CatalogName": "string",
                   "DatabaseName": "string"
                }
            ',
            $params->toJson()
        );
    }
}
