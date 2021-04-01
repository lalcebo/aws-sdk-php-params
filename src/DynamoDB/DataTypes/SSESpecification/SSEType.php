<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 9:54 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes\SSESpecification;

class SSEType
{
    /**
     * Use AES encryption algorithm a key length of 256 bits.
     *
     * @var string
     */
    public const AES256 = 'AES256';

    /**
     * Server-side encryption that uses AWS Key Management Service. The key
     * is stored in your account and is managed by AWS KMS (AWS KMS charges apply).
     *
     * @var string
     */
    public const KMS = 'KMS';
}
