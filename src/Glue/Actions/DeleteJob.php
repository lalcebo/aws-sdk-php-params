<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/1/21 10:58 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\Actions;

use Lalcebo\Aws\Params\Parameter;

/**
 * Deletes a specified job definition. If the job definition is not found, no exception is thrown.
 *
 * @package Lalcebo\Aws\Params\Glue\Actions
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_DeleteJob.html
 */
class DeleteJob extends Parameter
{
    /**
     * The name of the job definition to delete.
     *
     * @var string
     */
    public $jobName;

    /**
     * Deletes a specified job definition. If the job definition is not found, no exception is thrown.
     *
     * @param string $jobName The name of the job definition to delete.
     */
    public function __construct(string $jobName)
    {
        $this->jobName = $jobName;
    }
}
