<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:46 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\DataTypes\QueryExecutionStatus;

class State
{
    /**
     * Query has been submitted to the service.
     *
     * @var string
     */
    public const QUEUED = 'QUEUED';

    /**
     * Query is in execution phase.
     *
     * @var string
     */
    public const RUNNING = 'RUNNING';

    /**
     * Query completed without errors.
     *
     * @var string
     */
    public const SUCCEEDED = 'SUCCEEDED';

    /**
     * Query experienced an error and did not complete processing.
     *
     * @var string
     */
    public const FAILED = 'FAILED';

    /**
     * User input interrupted query execution.
     *
     * @var string
     */
    public const CANCELLED = 'CANCELLED';
}
