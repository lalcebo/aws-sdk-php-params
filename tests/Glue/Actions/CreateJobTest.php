<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/1/21 9:30 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests\Glue\Actions;

use Lalcebo\Aws\Params\Glue\Actions\CreateJob;
use Lalcebo\Aws\Params\Glue\DataTypes\ConnectionsList;
use Lalcebo\Aws\Params\Glue\DataTypes\ExecutionProperty;
use Lalcebo\Aws\Params\Glue\DataTypes\JobCommand;
use Lalcebo\Aws\Params\Glue\DataTypes\NotificationProperty;
use Lalcebo\Aws\Params\ListMap;
use PHPUnit\Framework\TestCase;

class CreateJobTest extends TestCase
{
    /** @test */
    public function toJsonEncodesResult(): void
    {
        $params = new CreateJob(
            'string',
            new JobCommand(
                JobCommand\Name::GLUE_ETL,
                JobCommand\PythonVersion::PYTHON3,
                'string'
            ),
            'string',
            CreateJob\GlueVersion::GLUE_20,
            CreateJob\WorkerType::G2X,
            1,
            1,
            1,
            1,
            new ListMap(['string' => 'string']),
            'string',
            new ConnectionsList(['string']),
            new ExecutionProperty(1),
            new ListMap(['string' => 'string']),
            new NotificationProperty(1),
            'string',
            ['string' => 'string'],
            'string'
        );

        self::assertJsonStringEqualsJsonString(
            '
                {
                   "Command": {
                      "Name": "glueetl",
                      "PythonVersion": "3",
                      "ScriptLocation": "string"
                   },
                   "Connections": {
                      "Connections": [ "string" ]
                   },
                   "DefaultArguments": {
                      "string" : "string"
                   },
                   "Description": "string",
                   "ExecutionProperty": {
                      "MaxConcurrentRuns": 1
                   },
                   "GlueVersion": "2.0",
                   "LogUri": "string",
                   "MaxCapacity": 1,
                   "MaxRetries": 1,
                   "Name": "string",
                   "NonOverridableArguments": {
                      "string" : "string"
                   },
                   "NotificationProperty": {
                      "NotifyDelayAfter": 1
                   },
                   "NumberOfWorkers": 1,
                   "Role": "string",
                   "SecurityConfiguration": "string",
                   "Tags": {
                      "string" : "string"
                   },
                   "Timeout": 1,
                   "WorkerType": "G.2X"
                }
            ',
            $params->toJson()
        );
    }
}
