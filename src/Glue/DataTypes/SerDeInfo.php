<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:17 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\Glue\DataTypes\SerDeInfo\SerializationLibrary;
use Lalcebo\Aws\Params\ListMap;
use Lalcebo\Aws\Params\Parameter;

/**
 * Information about a serialization/deserialization program (SerDe) that serves as an extractor and loader.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_SerDeInfo.html
 */
class SerDeInfo extends Parameter
{
    /**
     * Name of the SerDe.
     *
     * @var string
     */
    public $name;

    /**
     * Usually the class that implements the SerDe.
     *
     * @var string
     */
    public $serializationLibrary;

    /**
     * These key-value pairs define initialization parameters for the SerDe.
     *
     * @var ListMap
     */
    public $parameters;

    /**
     * Information about a serialization/deserialization program (SerDe) that serves as an extractor and loader.
     *
     * @param string|null $name Name of the SerDe.
     * @param string|null $serializationLibrary Usually the class that implements the SerDe.
     * @param ListMap|null $parameters These key-value pairs define initialization parameters for the SerDe.
     *
     * @see SerializationLibrary for the constants available for the $serializationLibrary parameter.
     */
    public function __construct(string $name = null, string $serializationLibrary = null, ListMap $parameters = null)
    {
        $this->name = $name;
        $this->serializationLibrary = $serializationLibrary;
        $this->parameters = $parameters;
    }
}
