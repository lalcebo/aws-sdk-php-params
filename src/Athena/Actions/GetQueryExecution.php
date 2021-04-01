<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 10:51 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\Parameter;

/**
 * Returns information about a single execution of a query if you have access to the workgroup in
 * which the query ran. Each time a query executes, information about the query execution is saved
 * with a unique ID.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_GetQueryExecution.html
 */
class GetQueryExecution extends Parameter
{
    /**
     * The unique ID of the query execution.
     *
     * @var string
     */
    public $queryExecutionId;

    /**
     * Returns information about a single execution of a query if you have access to the workgroup in
     * which the query ran. Each time a query executes, information about the query execution is saved
     * with a unique ID.
     *
     * @param  string  $queryExecutionId  The unique ID of the query execution.
     */
    public function __construct(string $queryExecutionId)
    {
        $this->queryExecutionId = $queryExecutionId;
    }
}
