<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 10:52 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\GetQueryExecution;
use PHPUnit\Framework\TestCase;

class GetQueryExecutionTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new GetQueryExecution('string');

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "QueryExecutionId": "string"
                }
            ',
            $params->toJson()
        );
    }
}
