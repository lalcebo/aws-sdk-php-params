<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:25 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\ListNamedQueries;
use PHPUnit\Framework\TestCase;

class ListNamedQueriesTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new ListNamedQueries(15, 'string', 'string');

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "MaxResults": 15,
                   "NextToken": "string",
                   "WorkGroup": "string"
                }
            ',
            $params->toJson()
        );
    }
}
