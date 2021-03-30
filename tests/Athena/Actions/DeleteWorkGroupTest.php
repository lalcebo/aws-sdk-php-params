<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:54 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\DeleteWorkGroup;
use PHPUnit\Framework\TestCase;

class DeleteWorkGroupTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new DeleteWorkGroup('string', true);

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "RecursiveDeleteOption": true,
                   "WorkGroup": "string"
                }
            ',
            $params->toJson()
        );
    }
}
