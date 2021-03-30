<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 10:50 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\GetNamedQuery;
use PHPUnit\Framework\TestCase;

class GetNamedQueryTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new GetNamedQuery('string');

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "NamedQueryId": "string"
                }
            ',
            $params->toJson()
        );
    }
}
