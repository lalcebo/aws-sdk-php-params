<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:32 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\ListTableMetadata;
use PHPUnit\Framework\TestCase;

class ListTableMetadataTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new ListTableMetadata(
            'string',
            'string',
            'string',
            10,
            'string'
        );

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "CatalogName": "string",
                   "DatabaseName": "string",
                   "Expression": "string",
                   "MaxResults": 10,
                   "NextToken": "string"
                }
            ',
            $params->toJson()
        );
    }
}
