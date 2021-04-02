<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/1/21 10:08 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\Actions\CreateJob;

class GlueVersion
{
    /**
     * Supported Spark 2.2.1 and Python 2.7 versions.
     *
     * @var string
     */
    public const GLUE_09 = '0.9';

    /**
     * Supported Spark 2.4.3 and Python 2.7, 3.6 versions.
     *
     * @var string
     */
    public const GLUE_10 = '1.0';

    /**
     * Supported Spark 2.4.3 and Python 3.7 versions.
     *
     * @var string
     */
    public const GLUE_20 = '2.0';
}
