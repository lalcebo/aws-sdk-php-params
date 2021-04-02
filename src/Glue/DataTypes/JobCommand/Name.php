<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/1/21 9:37 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes\JobCommand;

class Name
{
    /**
     * Apache Spark ETL job.
     *
     * @var string
     */
    public const GLUE_ETL = 'glueetl';

    /**
     * Python shell job.
     *
     * @var string
     */
    public const PYTHON_SHELL = 'pythonshell';

    /**
     * Apache Spark streaming ETL job.
     *
     * @var string
     */
    public const GLUE_STREAMING = 'gluestreaming';
}
