<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 1:00 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\AbstractBaseParam;

/**
 * Deletes the named query if you have access to the workgroup in which the query was saved.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_DeleteNamedQuery.html
 */
class DeleteNamedQuery extends AbstractBaseParam
{
    /**
     * The unique ID of the query to delete.
     *
     * @var string
     */
    public $namedQueryId;

    /**
     * Deletes the named query if you have access to the workgroup in which the query was saved.
     *
     * @param string $namedQueryId The unique ID of the query to delete.
     */
    public function __construct(string $namedQueryId)
    {
        $this->namedQueryId = $namedQueryId;
    }
}
