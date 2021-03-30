<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:29 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\ListQueryExecutions;
use PHPUnit\Framework\TestCase;

class ListQueryExecutionsTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new ListQueryExecutions(2, 'string', 'string');

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "MaxResults": 2,
                   "NextToken": "string",
                   "WorkGroup": "string"
                }
            ',
            $params->toJson()
        );
    }
}
