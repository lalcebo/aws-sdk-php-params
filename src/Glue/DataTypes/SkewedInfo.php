<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:19 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\ListMap;
use Lalcebo\Aws\Params\Parameter;

/**
 * Specifies skewed values in a table. Skewed values are those that occur with very high frequency.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_SkewedInfo.html
 */
class SkewedInfo extends Parameter
{
    /**
     * A list of names of columns that contain skewed values.
     *
     * @var string[]
     */
    public $skewedColumnNames;

    /**
     * A list of values that appear so frequently as to be considered skewed.
     *
     * @var string[]
     */
    public $skewedColumnValues;

    /**
     * A mapping of skewed values to the columns that contain them.
     *
     * @var ListMap
     */
    public $skewedColumnValueLocationMaps;

    /**
     * Specifies skewed values in a table. Skewed values are those that occur with very high frequency.
     *
     * @param string[] $skewedColumnNames A list of names of columns that contain skewed values.
     * @param string[] $skewedColumnValues A list of values that appear so frequently as to be considered skewed.
     * @param ListMap|null $skewedColumnValueLocationMaps  mapping of skewed values to the columns that contain them.
     */
    public function __construct(
        array $skewedColumnNames = null,
        array $skewedColumnValues = null,
        ListMap $skewedColumnValueLocationMaps = null
    ) {
        $this->skewedColumnNames = $skewedColumnNames;
        $this->skewedColumnValues = $skewedColumnValues;
        $this->skewedColumnValueLocationMaps = $skewedColumnValueLocationMaps;
    }
}
