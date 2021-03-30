<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 10:49 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\AbstractBaseParam;

/**
 * Returns information about a single query. Requires that you
 * have access to the workgroup in which the query was saved.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_GetNamedQuery.html
 */
class GetNamedQuery extends AbstractBaseParam
{
    /**
     * The unique ID of the query. Use ListNamedQueries to get query IDs.
     *
     * @var string
     */
    public $namedQueryId;

    /**
     * Returns information about a single query. Requires that you have access
     * to the workgroup in which the query was saved.
     *
     * @param  string  $namedQueryId The unique ID of the query. Use ListNamedQueries to get query IDs.
     */
    public function __construct(string $namedQueryId)
    {
        $this->namedQueryId = $namedQueryId;
    }
}
