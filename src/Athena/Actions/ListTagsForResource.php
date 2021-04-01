<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:34 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\Parameter;

/**
 * Lists the tags associated with an Athena workgroup or data catalog resource.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_ListTagsForResource.html
 */
class ListTagsForResource extends Parameter
{
    /**
     * Lists the tags for the resource with the specified ARN.
     *
     * @var string
     */
    public $resourceARN;

    /**
     * The maximum number of results to be returned per request that lists the tags for the resource.
     *
     * @var int
     */
    public $maxResults;

    /**
     * The token for the next set of results, or null if there are no additional results for this request,
     * where the request lists the tags for the resource with the specified ARN.
     *
     * @var string
     */
    public $nextToken;

    /**
     * Lists the tags associated with an Athena workgroup or data catalog resource.
     *
     * @param string $resourceARN Lists the tags for the resource with the specified ARN.
     * @param int|null $maxResults The maximum number of results to be returned per request
     * that lists the tags for the resource.
     * @param string|null $nextToken The token for the next set of results, or null if there are no
     * additional results for this request, where the request lists the tags for the resource with the specified ARN.
     */
    public function __construct(string $resourceARN, int $maxResults = null, string $nextToken = null)
    {
        $this->resourceARN = $resourceARN;
        $this->maxResults = max(abs($maxResults), 75);
        $this->nextToken = $nextToken;
    }
}
