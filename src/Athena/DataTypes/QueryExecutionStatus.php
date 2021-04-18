<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:42 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\DataTypes;

use Lalcebo\Aws\Params\Athena\DataTypes\QueryExecutionStatus\State;
use Lalcebo\Aws\Params\Parameter;

/**
 * The completion date, current state, submission time, and state
 * change reason (if applicable) for the query execution.
 *
 * @package Lalcebo\Aws\Params\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_QueryExecutionStatus.html
 */
class QueryExecutionStatus extends Parameter
{
    /**
     * The date and time that the query completed, is unix timestamp.
     *
     * @var float
     */
    public $completionDateTime;

    /**
     * The state of query execution. QUEUED indicates that the query has been submitted to
     * the service, and Athena will execute the query as soon as resources are available.
     * RUNNING indicates that the query is in execution phase. SUCCEEDED indicates that
     * the query completed without errors. FAILED indicates that the query experienced an
     * error and did not complete processing. CANCELLED indicates that a user input
     * interrupted query execution.
     *
     * @var string
     */
    public $state;

    /**
     * Further detail about the status of the query.
     *
     * @var string
     */
    public $stateChangeReason;

    /**
     * The date and time that the query was submitted, is unix timestamp.
     *
     * @var float
     */
    public $submissionDateTime;

    /**
     * The completion date, current state, submission time, and state
     * change reason (if applicable) for the query execution.
     *
     * @param float|null $completionDateTime The date and time that the query completed.
     * @param string|null $state The state of query execution. QUEUED indicates that the query has been submitted to
     * the service, and Athena will execute the query as soon as resources are available. RUNNING indicates that
     * the query is in execution phase. SUCCEEDED indicates that the query completed without errors. FAILED indicates
     * that the query experienced an error and did not complete processing. CANCELLED indicates that a user input
     * interrupted query execution.
     * @param string|null $stateChangeReason Further detail about the status of the query.
     * @param float|null $submissionDateTime The date and time that the query was submitted.
     *
     * @see State for the constants available for the $state parameter.
     */
    public function __construct(
        float $completionDateTime = null,
        string $state = null,
        string $stateChangeReason = null,
        float $submissionDateTime = null
    ) {
        $this->completionDateTime = $completionDateTime;
        $this->state = $state;
        $this->stateChangeReason = $stateChangeReason;
        $this->submissionDateTime = $submissionDateTime;
    }
}
