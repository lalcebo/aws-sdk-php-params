<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:36 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\DataTypes\EncryptionConfiguration;

class EncryptionOption
{
    /**
     * Server-side encryption with Amazon S3-managed keys.
     *
     * @var string
     */
    public const SSE_S3 = 'SSE_S3';

    /**
     * Server-side encryption with KMS-managed keys.
     *
     * @var string
     */
    public const SSE_KMS = 'SSE_KMS';

    /**
     * Client-side encryption with KMS-managed keys.
     *
     * @var string
     */
    public const CSE_KMS = 'CSE_KMS';
}
