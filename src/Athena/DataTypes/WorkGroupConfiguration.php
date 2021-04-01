<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:49 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\DataTypes;

use Lalcebo\Aws\Params\Parameter;

/**
 * The configuration of the workgroup, which includes the location in Amazon S3 where query results are stored,
 * the encryption option, if any, used for query results, whether the Amazon CloudWatch Metrics are enabled for
 * the workgroup and whether workgroup settings override query settings, and the data usage limits for the amount
 * of data scanned per query or per workgroup. The workgroup settings override is specified in
 * EnforceWorkGroupConfiguration (true/false) in the WorkGroupConfiguration.
 *
 * @package Lalcebo\Aws\Params\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_WorkGroupConfiguration.html
 */
class WorkGroupConfiguration extends Parameter
{
    /**
     * The upper data usage limit (cutoff) for the amount of bytes a single query in a workgroup is allowed to scan.
     *
     * @var int
     */
    public $bytesScannedCutoffPerQuery;

    /**
     * If set to "true", the settings for the workgroup override client-side settings. If set to "false",
     * client-side settings are used.
     *
     * @var bool
     */
    public $enforceWorkGroupConfiguration;

    /**
     * Indicates that the Amazon CloudWatch metrics are enabled for the workgroup.
     *
     * @var bool
     */
    public $publishCloudWatchMetricsEnabled;

    /**
     * If set to true, allows members assigned to a workgroup to reference Amazon S3 Requester Pays buckets in queries.
     * If set to false, workgroup members cannot query data from Requester Pays buckets, and queries that retrieve
     * data from Requester Pays buckets cause an error. The default is false.
     *
     * @var bool
     */
    public $requesterPaysEnabled;

    /**
     * The configuration for the workgroup, which includes the location in Amazon S3 where query results are
     * stored and the encryption option, if any, used for query results. To run the query, you must specify
     * the query results location using one of the ways: either in the workgroup using this setting, or for
     * individual queries (client-side), using ResultConfiguration:OutputLocation. If none of them is set,
     * Athena issues an error that no output location is provided.
     *
     * @var ResultConfiguration
     */
    public $resultConfiguration;

    /**
     * The engine version that all queries running on the workgroup use. Queries on the
     * AmazonAthenaPreviewFunctionality workgroup run on the preview engine regardless of this setting.
     *
     * @var EngineVersion
     */
    public $engineVersion;

    /**
     * The configuration of the workgroup, which includes the location in Amazon S3 where query results are stored,
     * the encryption option, if any, used for query results, whether the Amazon CloudWatch Metrics are enabled for
     * the workgroup and whether workgroup settings override query settings, and the data usage limits for the amount
     * of data scanned per query or per workgroup. The workgroup settings override is specified in
     * EnforceWorkGroupConfiguration (true/false) in the WorkGroupConfiguration.
     *
     * @param  int|null  $bytesScannedCutoffPerQuery  The upper data usage limit (cutoff) for the amount of bytes a
     * single query in a workgroup is allowed to scan.
     * @param  bool  $enforceWorkGroupConfiguration  If set to "true", the settings for the workgroup override
     * client-side settings. If set to "false", client-side settings are used.
     * @param  bool  $publishCloudWatchMetricsEnabled  Indicates that the Amazon CloudWatch metrics are enabled for
     * the workgroup.
     * @param  bool  $requesterPaysEnabled  If set to true, allows members assigned to a workgroup to reference
     * Amazon S3 Requester Pays buckets in queries. If set to false, workgroup members cannot query data from
     * Requester Pays buckets, and queries that retrieve data from Requester Pays buckets cause an error.
     * The default is false. For more information about Requester Pays buckets.
     * @param  ResultConfiguration|null  $resultConfiguration  The configuration for the workgroup, which includes the
     * location in Amazon S3 where query results are stored and the encryption option, if any, used for query results.
     * To run the query, you must specify the query results location using one of the ways: either in the workgroup
     * using this setting, or for individual queries (client-side), using ResultConfiguration:OutputLocation.
     * If none of them is set, Athena issues an error that no output location is provided.
     * @param EngineVersion|null $engineVersion The engine version that all queries running on the workgroup use.
     * Queries on the AmazonAthenaPreviewFunctionality workgroup run on the preview engine regardless of this setting.
     */
    public function __construct(
        int $bytesScannedCutoffPerQuery = null,
        bool $enforceWorkGroupConfiguration = null,
        bool $publishCloudWatchMetricsEnabled = null,
        bool $requesterPaysEnabled = false,
        ResultConfiguration $resultConfiguration = null,
        EngineVersion $engineVersion = null
    ) {
        $this->bytesScannedCutoffPerQuery = $bytesScannedCutoffPerQuery;
        $this->enforceWorkGroupConfiguration = $enforceWorkGroupConfiguration;
        $this->publishCloudWatchMetricsEnabled = $publishCloudWatchMetricsEnabled;
        $this->requesterPaysEnabled = $requesterPaysEnabled;
        $this->resultConfiguration = $resultConfiguration;
        $this->engineVersion = $engineVersion;
    }
}
