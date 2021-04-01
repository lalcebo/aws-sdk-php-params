<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:51 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\Parameter;

/**
 * Returns the details of a single named query or a list of up to 50 queries, which you provide as an array
 * of query ID strings. Requires you to have access to the workgroup in which the queries were saved.
 * Use ListNamedQueriesInput to get the list of named query IDs in the specified workgroup. If information
 * could not be retrieved for a submitted query ID, information about the query ID submitted is listed
 * under UnprocessedNamedQueryId. Named queries differ from executed queries. Use BatchGetQueryExecutionInput
 * to get details about each unique query execution, and ListQueryExecutionsInput to get a list of query
 * execution IDs.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_BatchGetNamedQuery.html
 */
class BatchGetNamedQuery extends Parameter
{
    /**
     * An array of query IDs.
     *
     * @var string[]
     */
    public $namedQueryIds;

    /**
     * Returns the details of a single named query or a list of up to 50 queries, which you provide as an array
     * of query ID strings. Requires you to have access to the workgroup in which the queries were saved.
     * Use ListNamedQueriesInput to get the list of named query IDs in the specified workgroup. If information
     * could not be retrieved for a submitted query ID, information about the query ID submitted is listed
     * under UnprocessedNamedQueryId. Named queries differ from executed queries. Use BatchGetQueryExecutionInput
     * to get details about each unique query execution, and ListQueryExecutionsInput to get a list of query
     * execution IDs.
     *
     * @param  array  $namedQueryIds  An array of query IDs.
     */
    public function __construct(array $namedQueryIds)
    {
        $this->namedQueryIds = $namedQueryIds;
    }
}
