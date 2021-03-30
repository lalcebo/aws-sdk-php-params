<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 1:46 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\DataTypes;

use Lalcebo\Aws\Params\AbstractBaseParam;

/**
 * The Athena engine version for running queries.
 *
 * @package Lalcebo\Aws\Params\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_EngineVersion.html
 */
class EngineVersion extends AbstractBaseParam
{
    /**
     * The engine version on which the query runs. If the user requests a valid engine
     * version other than Auto, the effective engine version is the same as the engine version
     * that the user requested. If the user requests Auto, the effective engine version is chosen
     * by Athena. When a request to update the engine version is made by a CreateWorkGroup or
     * UpdateWorkGroup operation, the EffectiveEngineVersion field is ignored.
     *
     * @var string
     */
    public $effectiveEngineVersion;

    /**
     * The engine version requested by the user. Possible values are determined by the output
     * of ListEngineVersions, including Auto. The default is Auto.
     *
     * @var string
     */
    public $selectedEngineVersion;

    /**
     * The Athena engine version for running queries.
     *
     * @param string|null $effectiveEngineVersion The engine version on which the query runs. If the user requests
     * a valid engine version other than Auto, the effective engine version is the same as the engine version that
     * the user requested. If the user requests Auto, the effective engine version is chosen by Athena. When a
     * request to update the engine version is made by a CreateWorkGroup or UpdateWorkGroup operation,
     * theEffectiveEngineVersion field is ignored.
     * @param string|null $selectedEngineVersion The engine version requested by the user. Possible values are
     * determined by the output of ListEngineVersions, including Auto. The default is Auto.
     */
    public function __construct(string $effectiveEngineVersion = null, string $selectedEngineVersion = null)
    {
        $this->effectiveEngineVersion = $effectiveEngineVersion;
        $this->selectedEngineVersion = $selectedEngineVersion;
    }
}
