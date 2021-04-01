<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 9:56 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes\StreamSpecification;

class StreamViewType
{
    /**
     * Only the key attributes of the modified item are written to the stream.
     *
     * @var string
     */
    public const KEYS_ONLY = 'KEYS_ONLY';

    /**
     * The entire item, as it appears after it was modified, is written to the stream.
     *
     * @var string
     */
    public const NEW_IMAGE = 'NEW_IMAGE';

    /**
     * The entire item, as it appeared before it was modified, is written to the stream.
     *
     * @var string
     */
    public const OLD_IMAGE = 'OLD_IMAGE';

    /**
     * Both the new and the old item images of the item are written to the stream.
     *
     * @var string
     */
    public const NEW_AND_OLD_IMAGES = 'NEW_AND_OLD_IMAGES';
}
