<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:02 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\GetWorkGroup;
use PHPUnit\Framework\TestCase;

class GetWorkGroupTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new GetWorkGroup('string');

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "WorkGroup": "string"
                }
            ',
            $params->toJson()
        );
    }
}
