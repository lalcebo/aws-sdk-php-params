<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/1/21 9:44 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\Parameter;

/**
 * An execution property of a job.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_ExecutionProperty.html
 */
class ExecutionProperty extends Parameter
{
    /**
     * The maximum number of concurrent runs allowed for the job.
     *
     * @var int
     */
    public $maxConcurrentRuns;

    /**
     * An execution property of a job.
     *
     * @param int $maxConcurrentRuns The maximum number of concurrent runs allowed for the job.
     */
    public function __construct(int $maxConcurrentRuns = 1)
    {
        $this->maxConcurrentRuns = $maxConcurrentRuns;
    }
}
