<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 1:39 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Athena\Actions;

use Lalcebo\Aws\Params\Athena\Actions\CreateWorkGroup;
use Lalcebo\Aws\Params\Athena\DataTypes\EncryptionConfiguration;
use Lalcebo\Aws\Params\Athena\DataTypes\EngineVersion;
use Lalcebo\Aws\Params\Athena\DataTypes\ResultConfiguration;
use Lalcebo\Aws\Params\Athena\DataTypes\Tag;
use Lalcebo\Aws\Params\Athena\DataTypes\WorkGroupConfiguration;
use PHPUnit\Framework\TestCase;

class CreateWorkGroupTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new CreateWorkGroup(
            'string',
            new WorkGroupConfiguration(
                10,
                false,
                true,
                true,
                new ResultConfiguration(
                    new EncryptionConfiguration(
                        EncryptionConfiguration\EncryptionOption::SSE_KMS,
                        'string'
                    ),
                    'string'
                ),
                new EngineVersion('string', 'string')
            ),
            'string',
            [
              new Tag('string', 'string')
            ]
        );

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "Configuration": {
                      "BytesScannedCutoffPerQuery": 10,
                      "PublishCloudWatchMetricsEnabled": true,
                      "RequesterPaysEnabled": true,
                      "EnforceWorkGroupConfiguration": false,
                      "ResultConfiguration": {
                         "EncryptionConfiguration": {
                            "EncryptionOption": "SSE_KMS",
                            "KmsKey": "string"
                         },
                         "OutputLocation": "string"
                      },
                      "EngineVersion": {
                         "EffectiveEngineVersion": "string",
                         "SelectedEngineVersion": "string"
                      }
                   },
                   "Description": "string",
                   "Name": "string",
                   "Tags": [
                      {
                         "Key": "string",
                         "Value": "string"
                      }
                   ]
                }
            ',
            $params->toJson()
        );
    }
}
