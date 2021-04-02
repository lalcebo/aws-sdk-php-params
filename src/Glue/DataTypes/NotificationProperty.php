<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 4/1/21 9:47 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\Parameter;

/**
 * Specifies configuration properties of a notification.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_NotificationProperty.html
 */
class NotificationProperty extends Parameter
{
    /**
     * After a job run starts, the number of minutes to wait before sending a job run delay notification.
     *
     * @var int
     */
    public $notifyDelayAfter;

    /**
     * Specifies configuration properties of a notification.
     *
     * @param int $notifyDelayAfter After a job run starts, the number of minutes to wait before sending
     * a job run delay notification.
     */
    public function __construct(int $notifyDelayAfter = 1)
    {
        $this->notifyDelayAfter = $notifyDelayAfter;
    }
}
