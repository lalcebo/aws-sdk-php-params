<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:01 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\Parameter;

/**
 * Returns information about the workgroup with the specified name.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_GetWorkGroup.html
 */
class GetWorkGroup extends Parameter
{
    /**
     * The name of the workgroup.
     *
     * @var string
     */
    public $workGroup;

    /**
     * Returns information about the workgroup with the specified name.
     *
     * @param  string  $workGroup The name of the workgroup.
     */
    public function __construct(string $workGroup)
    {
        $this->workGroup = $workGroup;
    }
}
