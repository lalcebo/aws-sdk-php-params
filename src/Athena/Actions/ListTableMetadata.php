<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:30 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\AbstractBaseParam;

/**
 * Lists the metadata for the tables in the specified data catalog database.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_ListTableMetadata.html
 */
class ListTableMetadata extends AbstractBaseParam
{
    /**
     * The name of the data catalog for which table metadata should be returned.
     *
     * @var string
     */
    public $catalogName;

    /**
     * The name of the database for which table metadata should be returned.
     *
     * @var string
     */
    public $databaseName;

    /**
     * A regex filter that pattern-matches table names. If no expression is supplied,
     * metadata for all tables are listed.
     *
     * @var string
     */
    public $expression;

    /**
     * Specifies the maximum number of results to return.
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
     * Lists the metadata for the tables in the specified data catalog database.
     *
     * @param string $catalogName The name of the data catalog for which table metadata should be returned.
     * @param string $databaseName The name of the database for which table metadata should be returned.
     * @param string|null $expression A regex filter that pattern-matches table names. If no expression is
     * supplied, metadata for all tables are listed.
     * @param int|null $maxResults Specifies the maximum number of results to return.
     * @param string|null $nextToken A token generated by the Athena service that specifies where to continue
     * pagination if a previous request was truncated. To obtain the next set of pages, pass in the NextToken
     * from the response object of the previous page call.
     */
    public function __construct(
        string $catalogName,
        string $databaseName,
        string $expression = null,
        int $maxResults = null,
        string $nextToken = null
    ) {
        $this->catalogName = $catalogName;
        $this->databaseName = $databaseName;
        $this->expression = $expression;
        $this->maxResults = numericRangeValid($maxResults, 1, 50);
        $this->nextToken = $nextToken;
    }
}
