<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:38 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\ListTagsForResource;
use PHPUnit\Framework\TestCase;

class ListTagsForResourceTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new ListTagsForResource(
            'string',
            45,
            'string'
        );

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "MaxResults": 75,
                   "NextToken": "string",
                   "ResourceARN": "string"
                }
            ',
            $params->toJson()
        );
    }
}
