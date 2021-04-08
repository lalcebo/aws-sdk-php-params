<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/8/21 6:32 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\Parameter;

/**
 * Streams the results of a single query execution specified by QueryExecutionId
 * from the Athena query results location in Amazon S3.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_GetQueryResults.html
 */
class GetQueryResults extends Parameter
{
    /**
     * The unique ID of the query execution.
     *
     * @var string
     */
    public $queryExecutionId;

    /**
     * The maximum number of results (rows) to return in this request.
     *
     * @var int
     */
    public $maxResults;

    /**
     * A token generated by the Athena service that specifies where to continue pagination
     * if a previous request was truncated. To obtain the next set of pages, pass in the
     * NextToken from the response object of the previous page call.
     *
     * @var string
     */
    public $nextToken;

    /**
     * Streams the results of a single query execution specified by QueryExecutionId
     * from the Athena query results location in Amazon S3.
     *
     * @param string $queryExecutionId The unique ID of the query execution.
     * @param int|null $maxResults The maximum number of results (rows) to return in this request.
     * @param string|null $nextToken A token generated by the Athena service that specifies where to continue pagination
     * if a previous request was truncated. To obtain the next set of pages, pass in the
     * NextToken from the response object of the previous page call.
     */
    public function __construct(string $queryExecutionId, int $maxResults = null, string $nextToken = null)
    {
        $this->queryExecutionId = $queryExecutionId;
        $this->maxResults = numericRangeValid($maxResults, 1, 1000);
        $this->nextToken = $nextToken;
    }
}
