<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 9:54 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes;

use Lalcebo\Aws\Params\DynamoDB\DataTypes\SSESpecification\SSEType;
use Lalcebo\Aws\Params\Parameter;

/**
 * Represents the settings used to enable server-side encryption.
 *
 * @package Lalcebo\Aws\Params\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_SSESpecification.html
 */
class SSESpecification extends Parameter
{
    /**
     * Indicates whether server-side encryption is done using an AWS managed CMK or an AWS owned CMK.
     * If enabled (true), server-side encryption type is set to KMS and an AWS managed CMK is used
     * (AWS KMS charges apply). If disabled (false) or not specified, server-side encryption is set
     * to AWS owned CMK.
     *
     * @var bool
     */
    public $enabled;

    /**
     * The AWS KMS customer master key (CMK) that should be used for the AWS KMS encryption. To specify
     * a CMK, use its key ID, Amazon Resource Name (ARN), alias name, or alias ARN. Note that you should
     * only provide this parameter if the key is different from the default DynamoDB customer master key
     * alias/aws/dynamodb.
     *
     * @var string
     */
    public $kMSMasterKeyId;

    /**
     * Server-side encryption type.
     *
     * @var string
     */
    public $sSEType;

    /**
     * Represents the settings used to enable server-side encryption.
     *
     * @param  bool|null  $enabled  Indicates whether server-side encryption is done using an AWS managed CMK or an AWS
     * owned CMK. If enabled (true), server-side encryption type is set to KMS and an AWS managed CMK is used
     * (AWS KMS charges apply). If disabled (false) or not specified, server-side encryption is set to AWS owned CMK.
     * @param  string|null  $kMSMasterKeyId  The AWS KMS customer master key (CMK) that should be used for the AWS
     * KMS encryption. To specify a CMK, use its key ID, Amazon Resource Name (ARN), alias name, or alias ARN.
     * Note that you should only provide this parameter if the key is different from the default DynamoDB customer
     * master key alias/aws/dynamodb.
     * @param  string|null  $sSEType  Server-side encryption type.
     *
     * @see SSEType for the constants available for the $sSEType parameter.
     */
    public function __construct(bool $enabled = null, string $kMSMasterKeyId = null, string $sSEType = null)
    {
        $this->enabled = $enabled;
        $this->kMSMasterKeyId = $kMSMasterKeyId;
        $this->sSEType = strtoupper((string)$sSEType);
    }
}
