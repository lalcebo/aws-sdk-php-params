<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/1/21 9:42 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\Parameter;

/**
 * Specifies the connections used by a job.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_ConnectionsList.html
 */
class ConnectionsList extends Parameter
{
    /**
     * A list of connections used by the job.
     *
     * @var string[]
     */
    public $connections;

    /**
     * Specifies the connections used by a job.
     *
     * @param string[] $connections A list of connections used by the job.
     */
    public function __construct(array $connections = null)
    {
        $this->connections = $connections;
    }
}
