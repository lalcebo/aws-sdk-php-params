<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:52 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\Parameter;

/**
 * Returns the details of a single query execution or a list of up to 50 query executions, which
 * you provide as an array of query execution ID strings. Requires you to have access to the
 * workgroup in which the queries ran. To get a list of query execution IDs, use ListQueryExecutions:WorkGroup.
 * Query executions differ from named (saved) queries. Use BatchGetNamedQueryInput to get details about named queries.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_BatchGetQueryExecution.html
 */
class BatchGetQueryExecution extends Parameter
{
    /**
     * An array of query execution IDs.
     *
     * @var string[]
     */
    public $queryExecutionIds;

    /**
     * Returns the details of a single query execution or a list of up to 50 query
     * executions, which you provide as an array of query execution ID strings.
     * Requires you to have access to the workgroup in which the queries ran. To
     * get a list of query execution IDs, use ListQueryExecutions:WorkGroup. Query
     * executions differ from named (saved) queries. Use BatchGetNamedQueryInput
     * to get details about named queries
     *
     * @param  string[]  $queryExecutionIds  An array of query execution IDs.
     */
    public function __construct(array $queryExecutionIds)
    {
        $this->queryExecutionIds = $queryExecutionIds;
    }
}
