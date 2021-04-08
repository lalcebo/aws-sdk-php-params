<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/8/21 6:31 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\GetQueryResults;
use PHPUnit\Framework\TestCase;

class GetQueryResultsTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new GetQueryResults('string', 100, 'string');

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "MaxResults": 100,
                   "NextToken": "string",
                   "QueryExecutionId": "string"
                }
            ',
            $params->toJson()
        );
    }
}
