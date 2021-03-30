<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:45 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\StartQueryExecution;
use Lalcebo\Aws\Params\Athena\DataTypes\EncryptionConfiguration;
use Lalcebo\Aws\Params\Athena\DataTypes\QueryExecutionContext;
use Lalcebo\Aws\Params\Athena\DataTypes\ResultConfiguration;
use PHPUnit\Framework\TestCase;

class StartQueryExecutionTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new StartQueryExecution(
            'string',
            'string',
            new QueryExecutionContext('string', 'string'),
            new ResultConfiguration(
                new EncryptionConfiguration(
                    EncryptionConfiguration\EncryptionOption::SSE_S3,
                    'string'
                ),
                'string'
            ),
            'string'
        );

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "ClientRequestToken": "string",
                   "QueryExecutionContext": {
                      "Catalog": "string",
                      "Database": "string"
                   },
                   "QueryString": "string",
                   "ResultConfiguration": {
                      "EncryptionConfiguration": {
                         "EncryptionOption": "SSE_S3",
                         "KmsKey": "string"
                      },
                      "OutputLocation": "string"
                   },
                   "WorkGroup": "string"
                }
            ',
            $params->toJson()
        );
    }
}
