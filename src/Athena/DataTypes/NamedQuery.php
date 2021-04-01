<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:37 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\DataTypes;

use Lalcebo\Aws\Params\Parameter;

/**
 * A query, where QueryString is the list of SQL query statements that comprise the query.
 *
 * @package Lalcebo\Aws\Params\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_NamedQuery.html
 */
class NamedQuery extends Parameter
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
     * The SQL query statements that comprise the query.
     *
     * @var string
     */
    public $queryString;

    /**
     * The name of the workgroup that contains the named query.
     *
     * @var string
     */
    public $workGroup;

    /**
     * The unique identifier of the query.
     *
     * @var string
     */
    public $namedQueryId;

    /**
     * The query description.
     *
     * @var string
     */
    public $description;

    /**
     * A query, where QueryString is the list of SQL query statements that comprise the query.
     *
     * @param string $database The database to which the query belongs.
     * @param string $name The query name.
     * @param string $queryString The SQL query statements that comprise the query.
     * @param string|null $workGroup The name of the workgroup that contains the named query.
     * @param string|null $namedQueryId The unique identifier of the query.
     * @param string|null $description The query description.
     */
    public function __construct(
        string $database,
        string $name,
        string $queryString,
        string $workGroup = null,
        string $namedQueryId = null,
        string $description = null
    ) {
        $this->database = $database;
        $this->name = $name;
        $this->queryString = $queryString;
        $this->workGroup = $workGroup;
        $this->namedQueryId = $namedQueryId;
        $this->description = $description;
    }
}
