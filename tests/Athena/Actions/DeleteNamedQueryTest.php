<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:53 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\DeleteNamedQuery;
use PHPUnit\Framework\TestCase;

class DeleteNamedQueryTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new DeleteNamedQuery('string');

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
