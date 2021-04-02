<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/1/21 9:32 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\Glue\DataTypes\JobCommand\Name;
use Lalcebo\Aws\Params\Glue\DataTypes\JobCommand\PythonVersion;
use Lalcebo\Aws\Params\Parameter;

/**
 * Specifies code executed when a job is run.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_JobCommand.html
 */
class JobCommand extends Parameter
{
    /**
     * The name of the job command. For an Apache Spark ETL job, this must be glueetl.
     * For a Python shell job, it must be pythonshell. For an Apache Spark streaming
     * ETL job, this must be gluestreaming.
     *
     * @var string
     */
    public $name;

    /**
     * The Python version being used to execute a Python shell job. Allowed values are 2 or 3.
     *
     * @var string
     */
    public $pythonVersion;

    /**
     * Specifies the Amazon Simple Storage Service (Amazon S3) path to a script that executes a job.
     *
     * @var string
     */
    public $scriptLocation;

    /**
     * Specifies code executed when a job is run.
     *
     * @param string|null $name The name of the job command. For an Apache Spark ETL job, this must be glueetl.
     * For a Python shell job, it must be pythonshell. For an Apache Spark streaming
     * ETL job, this must be gluestreaming.
     * @param string|null $pythonVersion The Python version being used to execute a Python shell job.
     * Allowed values are 2 or 3.
     * @param string|null $scriptLocation Specifies the Amazon Simple Storage Service (Amazon S3) path to a
     * script that executes a job.
     *
     * @see Name for the constants available for the $name parameter.
     * @see PythonVersion for the constants available for the $pythonVersion parameter.
     */
    public function __construct(string $name = null, string $pythonVersion = null, string $scriptLocation = null)
    {
        $this->name = $name;
        $this->pythonVersion = $pythonVersion;
        $this->scriptLocation = $scriptLocation;
    }
}
