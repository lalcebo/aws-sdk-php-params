<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:49 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\AbstractBaseParam;

/**
 * Stops a query execution. Requires you to have access to the workgroup in which the query ran.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_StopQueryExecution.html
 */
class StopQueryExecution extends AbstractBaseParam
{
    /**
     * The unique ID of the query execution to stop.
     *
     * @var string
     */
    public $queryExecutionId;

    /**
     * Stops a query execution. Requires you to have access to the workgroup in which the query ran.
     *
     * @param  string  $queryExecutionId The unique ID of the query execution to stop.
     */
    public function __construct(string $queryExecutionId)
    {
        $this->queryExecutionId = $queryExecutionId;
    }
}
