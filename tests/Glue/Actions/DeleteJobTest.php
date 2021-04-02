<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/1/21 10:57 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Glue\Actions;

use Lalcebo\Aws\Params\Glue\Actions\DeleteJob;
use PHPUnit\Framework\TestCase;

class DeleteJobTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new DeleteJob('string');

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "JobName": "string"
                }
            ',
            $params->toJson()
        );
    }
}
