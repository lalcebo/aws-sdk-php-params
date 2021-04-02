<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/1/21 9:30 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\Actions;

use Lalcebo\Aws\Params\Glue\Actions\CreateJob\GlueVersion;
use Lalcebo\Aws\Params\Glue\Actions\CreateJob\WorkerType;
use Lalcebo\Aws\Params\Glue\DataTypes\ConnectionsList;
use Lalcebo\Aws\Params\Glue\DataTypes\ExecutionProperty;
use Lalcebo\Aws\Params\Glue\DataTypes\JobCommand;
use Lalcebo\Aws\Params\Glue\DataTypes\NotificationProperty;
use Lalcebo\Aws\Params\ListMap;
use Lalcebo\Aws\Params\Parameter;

/**
 * Creates a new job definition.
 *
 * @package Lalcebo\Aws\Params\Glue\Actions
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_CreateJob.html
 */
class CreateJob extends Parameter
{
    /**
     * The name you assign to this job definition. It must be unique in your account.
     *
     * @var string
     */
    public $name;

    /**
     * The JobCommand that executes this job.
     *
     * @var JobCommand
     */
    public $command;

    /**
     * The name or Amazon Resource Name (ARN) of the IAM role associated with this job.
     *
     * @var string
     */
    public $role;

    /**
     * The connections used for this job.
     *
     * @var ConnectionsList
     */
    public $connections;

    /**
     * The default arguments for this job.
     *
     * @var ListMap
     * @see https://docs.aws.amazon.com/glue/latest/dg/aws-glue-programming-etl-glue-arguments.html
     */
    public $defaultArguments;

    /**
     * Description of the job being defined.
     *
     * @var string
     */
    public $description;

    /**
     * An ExecutionProperty specifying the maximum number of concurrent runs allowed for this job.
     *
     * @var ExecutionProperty
     */
    public $executionProperty;

    /**
     * Glue version determines the versions of Apache Spark and Python that AWS Glue supports.
     * The Python version indicates the version supported for jobs of type Spark.
     *
     * @var string
     */
    public $glueVersion;

    /**
     * This field is reserved for future use.
     *
     * @var string
     */
    public $logUri;

    /**
     * For Glue version 1.0 or earlier jobs, using the standard worker type, the number of AWS Glue
     * data processing units (DPUs) that can be allocated when this job runs. A DPU is a relative
     * measure of processing power that consists of 4 vCPUs of compute capacity and 16 GB of memory.
     *
     * <b>Warning:</b> Do not set Max Capacity if using WorkerType and NumberOfWorkers.
     *
     * <b>Note:</b> For Glue version 2.0 jobs, you cannot instead specify a Maximum capacity.
     * Instead, you should specify a Worker type and the Number of workers.
     *
     * @var double
     */
    public $maxCapacity;

    /**
     * The maximum number of times to retry this job if it fails.
     *
     * @var int
     */
    public $maxRetries;

    /**
     * Non-overridable arguments for this job, specified as name-value pairs.
     *
     * @var ListMap
     */
    public $nonOverridableArguments;

    /**
     * Specifies configuration properties of a job notification.
     *
     * @var NotificationProperty
     */
    public $notificationProperty;

    /**
     * The number of workers of a defined workerType that are allocated when a job runs.
     *
     * @var int
     */
    public $numberOfWorkers;

    /**
     * The name of the SecurityConfiguration structure to be used with this job.
     *
     * @var string
     */
    public $securityConfiguration;

    /**
     * The tags to use with this job. You may use tags to limit access to the job.
     *
     * @var string[]
     */
    public $tags;

    /**
     * The job timeout in minutes. This is the maximum time that a job run can consume
     * resources before it is terminated and enters TIMEOUT status.
     *
     * @var int
     */
    public $timeout;

    /**
     * The type of predefined worker that is allocated when a job runs.
     *
     * @var string
     */
    public $workerType;

    /**
     * The number of AWS Glue data processing units (DPUs) to allocate to this Job. You can allocate
     * from 2 to 100 DPUs; the default is 10. A DPU is a relative measure of processing power that
     * consists of 4 vCPUs of compute capacity and 16 GB of memory.
     *
     * @var int
     * @deprecated This parameter is deprecated. Use $maxCapacity instead.
     */
    public $allocatedCapacity;

    /**
     * Creates a new job definition.
     *
     * @param string $name The name you assign to this job definition. It must be unique in your account.
     * @param JobCommand $command The JobCommand that executes this job.
     * @param string $role The name or Amazon Resource Name (ARN) of the IAM role associated with this job.
     * @param string|null $glueVersion Glue version determines the versions of Apache Spark and Python that
     * AWS Glue supports. The Python version indicates the version supported for jobs of type Spark.
     * @param string|null $workerType The type of predefined worker that is allocated when a job runs.
     * @param int|null $numberOfWorkers The number of workers of a defined workerType that are allocated
     * when a job runs.
     * @param int|null $maxRetries The maximum number of times to retry this job if it fails.
     * @param int $timeout The job timeout in minutes. This is the maximum time that a job run can consume
     * resources before it is terminated and enters TIMEOUT status.
     * @param float|null $maxCapacity For Glue version 1.0 or earlier jobs, using the standard worker type,
     * the number of AWS Glue data processing units (DPUs) that can be allocated when this job runs. A DPU
     * is a relative measure of processing power that consists of 4 vCPUs of compute capacity and 16 GB of memory.
     * @param ListMap|null $defaultArguments The default arguments for this job.
     * @param string|null $description Description of the job being defined.
     * @param ConnectionsList|null $connections The connections used for this job.
     * @param ExecutionProperty|null $executionProperty An ExecutionProperty specifying the maximum number of
     * concurrent runs allowed for this job.
     * @param string|null $logUri This field is reserved for future use.
     * @param ListMap|null $nonOverridableArguments Non-overridable arguments for this job, specified
     * as name-value pairs.
     * @param NotificationProperty|null $notificationProperty Specifies configuration properties of a job notification.
     * @param string|null $securityConfiguration The name of the SecurityConfiguration structure to be
     * used with this job.
     * @param array|null $tags The tags to use with this job. You may use tags to limit access to the job.
     *
     * @see GlueVersion for the constants available for the $glueVersion parameter.
     * @see WorkerType for the constants available for the $workerType parameter.
     */
    public function __construct(
        string $name,
        JobCommand $command,
        string $role,
        string $glueVersion = null,
        string $workerType = null,
        int $numberOfWorkers = null,
        int $maxRetries = null,
        int $timeout = 2880,
        float $maxCapacity = null,
        ListMap $defaultArguments = null,
        string $description = null,
        ConnectionsList $connections = null,
        ExecutionProperty $executionProperty = null,
        ListMap $nonOverridableArguments = null,
        NotificationProperty $notificationProperty = null,
        string $securityConfiguration = null,
        array $tags = null,
        string $logUri = null
    ) {
        $this->name = $name;
        $this->command = $command;
        $this->role = $role;
        $this->connections = $connections;
        $this->defaultArguments = $defaultArguments;
        $this->description = $description;
        $this->executionProperty = $executionProperty;
        $this->glueVersion = $glueVersion;
        $this->logUri = $logUri;
        $this->maxCapacity = $maxCapacity;
        $this->maxRetries = $maxRetries;
        $this->nonOverridableArguments = $nonOverridableArguments;
        $this->notificationProperty = $notificationProperty;
        $this->numberOfWorkers = $numberOfWorkers;
        $this->securityConfiguration = $securityConfiguration;
        $this->tags = $tags;
        $this->timeout = $timeout;
        $this->workerType = $workerType;
    }
}
