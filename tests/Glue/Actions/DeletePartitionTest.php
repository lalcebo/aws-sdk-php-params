<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/1/21 11:01 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Glue\Actions;

use Lalcebo\Aws\Params\Glue\Actions\DeletePartition;
use PHPUnit\Framework\TestCase;

class DeletePartitionTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new DeletePartition(
            'string',
            'string',
            ['string'],
            'string'
        );

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "CatalogId": "string",
                   "DatabaseName": "string",
                   "PartitionValues": ["string"],
                   "TableName": "string"
                }
            ',
            $params->toJson()
        );
    }
}
