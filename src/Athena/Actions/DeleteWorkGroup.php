<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 1:01 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\Actions;

use Lalcebo\Aws\Params\Parameter;

/**
 * Deletes the workgroup with the specified name. The primary workgroup cannot be deleted.
 *
 * @package Lalcebo\Aws\Params\Athena\Actions
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_DeleteWorkGroup.html
 */
class DeleteWorkGroup extends Parameter
{
    /**
     * The unique name of the workgroup to delete.
     *
     * @var string
     */
    public $workGroup;

    /**
     * The option to delete the workgroup and its contents even if the workgroup contains
     * any named queries or query executions.
     *
     * @var bool
     */
    public $recursiveDeleteOption;

    /**
     * Deletes the workgroup with the specified name. The primary workgroup cannot be deleted.
     *
     * @param string $workGroup The unique name of the workgroup to delete.
     * @param bool|null $recursiveDeleteOption The option to delete the workgroup and its contents even if the
     * workgroup contains any named queries or query executions.
     */
    public function __construct(string $workGroup, bool $recursiveDeleteOption = null)
    {
        $this->workGroup = $workGroup;
        $this->recursiveDeleteOption = $recursiveDeleteOption;
    }
}
