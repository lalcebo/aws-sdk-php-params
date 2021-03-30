<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:43 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\AbstractBaseParam;
use Lalcebo\Aws\Params\Athena\DataTypes\QueryExecutionContext;
use Lalcebo\Aws\Params\Athena\DataTypes\ResultConfiguration;

/**
 * Runs the SQL query statements contained in the Query. Requires you to have access to the workgroup in
 * which the query ran. Running queries against an external catalog requires GetDataCatalog permission
 * to the catalog.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_StartQueryExecution.html
 */
class StartQueryExecution extends AbstractBaseParam
{
    /**
     * A unique case-sensitive string used to ensure the request to create the query
     * is idempotent (executes only once). If another StartQueryExecution request is
     * received, the same response is returned and another query is not created.
     *
     * @var string
     */
    public $clientRequestToken;

    /**
     * The database within which the query executes.
     *
     * @var QueryExecutionContext
     */
    public $queryExecutionContext;

    /**
     * The SQL query statements to be executed.
     *
     *   Constraints: Minimum length of 1. Maximum length of 262144.
     *
     * @var string
     */
    public $queryString;

    /**
     * Specifies information about where and how to save the results of the query execution.
     * If the query runs in a workgroup, then workgroup's settings may override query settings.
     * This affects the query results location. The workgroup settings override is specified
     * in EnforceWorkGroupConfiguration (true/false) in the WorkGroupConfiguration.
     *
     * @var ResultConfiguration
     */
    public $resultConfiguration;

    /**
     * The name of the workgroup in which the query is being started.
     *
     *   Pattern: Must have to this constrain [a-zA-Z0-9._-]{1,128}
     *
     * @var string
     */
    public $workGroup;

    /**
     * Runs the SQL query statements contained in the Query. Requires you to have access to the workgroup in
     * which the query ran. Running queries against an external catalog requires GetDataCatalog permission
     * to the catalog.
     *
     * @param string $queryString The SQL query statements to be executed.
     * @param string|null $clientRequestToken A unique case-sensitive string used to ensure the request to create
     * the query is idempotent (executes only once). If another StartQueryExecution request is received, the
     * same response is returned and another query is not created.
     * @param QueryExecutionContext|null $queryExecutionContext The database and data catalog context in which
     * the query execution occurs.
     * @param ResultConfiguration|null $resultConfiguration The location in Amazon S3 where query results are
     * stored and the encryption option, if any, used for query results. These are known as "client-side settings".
     * If workgroup settings override client-side settings, then the query uses the workgroup settings.
     * @param string|null $workGroup The name of the workgroup in which the query is being started.
     */
    public function __construct(
        string $queryString,
        string $clientRequestToken = null,
        QueryExecutionContext $queryExecutionContext = null,
        ResultConfiguration $resultConfiguration = null,
        string $workGroup = null
    ) {
        $this->queryString = $queryString;
        $this->clientRequestToken = $clientRequestToken;
        $this->queryExecutionContext = $queryExecutionContext;
        $this->resultConfiguration = $resultConfiguration;
        $this->workGroup = $workGroup;
    }
}
