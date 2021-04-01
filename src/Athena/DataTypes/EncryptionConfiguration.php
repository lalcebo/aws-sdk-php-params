<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:33 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\DataTypes;

use Lalcebo\Aws\Params\Parameter;
use Lalcebo\Aws\Params\Athena\DataTypes\EncryptionConfiguration\EncryptionOption;

/**
 * If query results are encrypted in Amazon S3, indicates the encryption
 * option used (for example, SSE-KMS or CSE-KMS) and key information.
 *
 * @package Lalcebo\Aws\Params\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_EncryptionConfiguration.html
 */
class EncryptionConfiguration extends Parameter
{
    /**
     * Indicates whether Amazon S3 server-side encryption with Amazon S3-managed keys (SSE-S3),
     * server-side encryption with KMS-managed keys (SSE-KMS), or client-side encryption
     * with KMS-managed keys (CSE-KMS) is used.
     *
     * @var string
     */
    public $encryptionOption;

    /**
     * For SSE-KMS and CSE-KMS, this is the KMS key ARN or ID.
     *
     * @var string
     */
    public $kmsKey;

    /**
     * If query results are encrypted in Amazon S3, indicates the encryption option used
     * (for example, SSE-KMS or CSE-KMS) and key information.
     *
     * @param string $encryptionOption Indicates whether Amazon S3 server-side encryption with Amazon
     * S3-managed keys (SSE-S3), server-side encryption with KMS-managed keys (SSE-KMS), or client-side encryption
     * with KMS-managed keys (CSE-KMS) is used.
     * @param string|null $kmsKey For SSE-KMS and CSE-KMS, this is the KMS key ARN or ID.
     *
     * @see EncryptionOption for the constants available for the $encryptionOption parameter.
     */
    public function __construct(string $encryptionOption, string $kmsKey = null)
    {
        $this->encryptionOption = strtoupper($encryptionOption);
        $this->kmsKey = $kmsKey;
    }
}
