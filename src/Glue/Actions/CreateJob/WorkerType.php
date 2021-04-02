<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/1/21 9:55 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\Actions\CreateJob;

class WorkerType
{
    /**
     * Each worker provides 4 vCPU, 16 GB of memory and a 50GB disk, and 2 executors per worker.
     *
     * @var string
     */
    public const STANDARD = 'Standard';

    /**
     * each worker maps to 1 DPU (4 vCPU, 16 GB of memory, 64 GB disk), and provides 1 executor
     * per worker. We recommend this worker type for memory-intensive jobs.
     *
     * @var string
     */
    public const G1X = 'G.1X';

    /**
     * each worker maps to 2 DPU (8 vCPU, 32 GB of memory, 128 GB disk), and provides 1 executor
     * per worker. We recommend this worker type for memory-intensive jobs.
     *
     * @var string
     */
    public const G2X = 'G.2X';
}
