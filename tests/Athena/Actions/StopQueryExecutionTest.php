<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:50 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\StopQueryExecution;
use PHPUnit\Framework\TestCase;

class StopQueryExecutionTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new StopQueryExecution('string');

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
