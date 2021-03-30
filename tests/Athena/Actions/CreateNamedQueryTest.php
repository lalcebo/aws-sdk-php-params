<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 1:35 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\CreateNamedQuery;
use PHPUnit\Framework\TestCase;

class CreateNamedQueryTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new CreateNamedQuery(
            'string',
            'string',
            'string',
            'string',
            'string',
            'string'
        );

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "ClientRequestToken": "string",
                   "Database": "string",
                   "Description": "string",
                   "Name": "string",
                   "QueryString": "string",
                   "WorkGroup": "string"
                }
            ',
            $params->toJson()
        );
    }
}
