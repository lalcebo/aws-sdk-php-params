<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 10:47 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\AbstractBaseParam;

/**
 * Returns the specified data catalog.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_GetDataCatalog.html
 */
class GetDataCatalog extends AbstractBaseParam
{
    /**
     * The name of the data catalog to return.
     *
     * @var string
     */
    public $name;

    /**
     * Returns the specified data catalog.
     *
     * @param  string  $name  The name of the data catalog to return.
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
