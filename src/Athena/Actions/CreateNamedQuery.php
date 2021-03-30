<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:57 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\AbstractBaseParam;

/**
 * Creates a named query in the specified workgroup. Requires that you have access to the workgroup.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_CreateNamedQuery.html
 */
class CreateNamedQuery extends AbstractBaseParam
{
    /**
     * The database to which the query belongs.
     *
     * @var string
     */
    public $database;

    /**
     * The query name.
     *
     * @var string
     */
    public $name;

    /**
     * The contents of the query with all query statements.
     *
     * @var string
     */
    public $queryString;

    /**
     * A unique case-sensitive string used to ensure the request to create the query is idempotent
     * (executes only once). If another CreateNamedQuery request is received, the same response is
     * returned and another query is not created. If a parameter has changed, for example, the
     * QueryString, an error is returned.
     *
     * @var string
     */
    public $clientRequestToken;

    /**
     * The query description.
     *
     * @var string
     */
    public $description;

    /**
     * The name of the workgroup in which the named query is being created.
     *
     * @var string
     */
    public $workGroup;

    /**
     * Creates a named query in the specified workgroup. Requires that you have access to the workgroup.
     *
     * @param  string  $database  The database to which the query belongs.
     * @param  string  $name  The query name.
     * @param  string  $queryString  The contents of the query with all query statements.
     * @param  string|null  $workGroup  The name of the workgroup in which the named query is being created.
     * @param  string|null  $description  The query description.
     * @param  string|null  $clientRequestToken  A unique case-sensitive string used to ensure the request to
     * create the query is idempotent (executes only once). If another CreateNamedQuery request is received,
     * the same response is returned and another query is not created. If a parameter has changed, for example,
     * the QueryString, an error is returned.
     */
    public function __construct(
        string $database,
        string $name,
        string $queryString,
        string $workGroup = null,
        string $description = null,
        string $clientRequestToken = null
    ) {
        $this->database = $database;
        $this->name = $name;
        $this->queryString = $queryString;
        $this->workGroup = $workGroup;
        $this->description = $description;
        $this->clientRequestToken = $clientRequestToken;
    }
}
