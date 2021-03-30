<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:22 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\ListDataCatalogs;
use PHPUnit\Framework\TestCase;

class ListDataCatalogsTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new ListDataCatalogs(5, 'string');

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "MaxResults": 5,
                   "NextToken": "string"
                }
            ',
            $params->toJson()
        );
    }
}
