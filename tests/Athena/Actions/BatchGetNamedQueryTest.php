<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 1:05 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\BatchGetNamedQuery;
use PHPUnit\Framework\TestCase;

class BatchGetNamedQueryTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new BatchGetNamedQuery(
            [
                'string'
            ]
        );

        self::assertJsonStringEqualsJsonString(
            '{
                "NamedQueryIds": [
                    "string"
                ]
            }',
            $params->toJson()
        );
    }
}
