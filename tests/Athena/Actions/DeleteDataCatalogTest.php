<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:52 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\DeleteDataCatalog;
use PHPUnit\Framework\TestCase;

class DeleteDataCatalogTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new DeleteDataCatalog('string');

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "Name": "string"
                }
            ',
            $params->toJson()
        );
    }
}
