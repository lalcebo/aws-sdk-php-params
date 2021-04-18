<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:58 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\Athena\DataTypes\Tag;
use Lalcebo\Aws\Params\Athena\DataTypes\WorkGroupConfiguration;
use Lalcebo\Aws\Params\Parameter;

/**
 * Creates a workgroup with the specified name.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_CreateWorkGroup.html
 */
class CreateWorkGroup extends Parameter
{
    /**
     * The workgroup name.
     *
     * @var string
     */
    public $name;

    /**
     * The configuration for the workgroup, which includes the location in Amazon S3 where query results are
     * stored, the encryption configuration, if any, used for encrypting query results, whether the Amazon
     * CloudWatch Metrics are enabled for the workgroup, the limit for the amount of bytes scanned (cutoff)
     * per query, if it is specified, and whether workgroup's settings (specified with EnforceWorkGroupConfiguration)
     * in the WorkGroupConfiguration override client-side settings.
     *
     * @var WorkGroupConfiguration
     */
    public $configuration;

    /**
     * The workgroup description.
     *
     * @var string
     */
    public $description;

    /**
     * A array of Tag to add to the workgroup that is created.
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * Creates a workgroup with the specified name.
     *
     * @param  string  $name The workgroup name.
     * @param  WorkGroupConfiguration|null  $configuration The configuration for the workgroup, which includes the
     * location in Amazon S3 where query results are stored, the encryption configuration, if any, used for encrypting
     * query results, whether the Amazon CloudWatch Metrics are enabled for the workgroup, the limit for the amount
     * of bytes scanned (cutoff) per query, if it is specified, and whether workgroup's settings (specified with
     * EnforceWorkGroupConfiguration) in the WorkGroupConfiguration override client-side settings.
     * @param  string|null  $description The workgroup description.
     * @param  Tag[]|null  $tags A array of Tag to add to the workgroup that is created.
     */
    public function __construct(
        string $name,
        WorkGroupConfiguration $configuration = null,
        string $description = null,
        array $tags = null
    ) {
        $this->name = $name;
        $this->configuration = $configuration;
        $this->description = $description;
        $this->tags = $tags;
    }
}
