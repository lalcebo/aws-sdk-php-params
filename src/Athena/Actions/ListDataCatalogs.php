<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:06 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\Parameter;

/**
 * Lists the data catalogs in the current AWS account.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_ListDataCatalogs.html
 */
class ListDataCatalogs extends Parameter
{
    /**
     * Specifies the maximum number of data catalogs to return.
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
     * Lists the data catalogs in the current AWS account.
     *
     * @param  int|null  $maxResults  Specifies the maximum number of data catalogs to return.
     * @param  string|null  $nextToken  A token generated by the Athena service that specifies where to continue
     * pagination if a previous request was truncated. To obtain the next set of pages, pass in the NextToken
     * from the response object of the previous page call.
     */
    public function __construct(int $maxResults = null, string $nextToken = null)
    {
        $this->maxResults = int_in_range($maxResults, 2, 50);
        $this->nextToken = $nextToken;
    }
}
