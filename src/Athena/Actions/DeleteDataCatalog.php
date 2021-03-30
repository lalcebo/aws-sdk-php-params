<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:59 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\AbstractBaseParam;

/**
 * Deletes a data catalog.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_DeleteDataCatalog.html
 */
class DeleteDataCatalog extends AbstractBaseParam
{
    /**
     * The name of the data catalog to delete.
     *
     * @var string
     */
    public $name;

    /**
     * Deletes a data catalog.
     *
     * @param  string  $name  The name of the data catalog to return.
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
