<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:27 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\Parameter;

/**
 * Provides a list of available query execution IDs for the queries in the specified workgroup.
 * If a workgroup is not specified, returns a list of query execution IDs for the primary workgroup.
 * Requires you to have access to the workgroup in which the queries ran.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_ListQueryExecutions.html
 */
class ListQueryExecutions extends Parameter
{
    /**
     * The maximum number of queries to return in this request.
     *
     * @var int
     */
    public $maxResults;

    /**
     * A token generated by the Athena service that specifies where to continue pagination if a previous
     * request was truncated. To obtain the next set of pages, pass in the NextToken from the response
     * object of the previous page call.
     *
     * @var string
     */
    public $nextToken;

    /**
     * The name of the workgroup from which the named queries are being returned. If a workgroup is not
     * specified, the saved queries for the primary workgroup are returned.
     *
     * @var string
     */
    public $workGroup;

    /**
     * Provides a list of available query execution IDs for the queries in the specified workgroup.
     * If a workgroup is not specified, returns a list of query execution IDs for the primary workgroup.
     * Requires you to have access to the workgroup in which the queries ran.
     *
     * @param  int|null  $maxResults  The maximum number of queries to return in this request.
     * @param  string|null  $nextToken  A token generated by the Athena service that specifies where to continue
     * pagination if a previous request was truncated. To obtain the next set of pages, pass in the NextToken
     * from the response object of the previous page call.
     * @param  string|null  $workGroup  The name of the workgroup from which the named queries are being returned.
     * If a workgroup is not specified, the saved queries for the primary workgroup are returned.
     */
    public function __construct(int $maxResults = null, string $nextToken = null, string $workGroup = null)
    {
        $this->maxResults = int_in_range($maxResults, 0, 50);
        $this->nextToken = $nextToken;
        $this->workGroup = $workGroup;
    }
}
