<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:46 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\DataTypes;

use Lalcebo\Aws\Params\AbstractBaseParam;

/**
 * The location in Amazon S3 where query results are stored and the encryption option, if any,
 * used for query results. These are known as "client-side settings". If workgroup settings
 * override client-side settings, then the query uses the workgroup settings.
 *
 * @package Lalcebo\Aws\Params\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_ResultConfiguration.html
 */
class ResultConfiguration extends AbstractBaseParam
{
    /**
     * If query results are encrypted in Amazon S3, indicates the encryption option used
     * (for example, SSE-KMS or CSE-KMS) and key information. This is a client-side setting.
     * If workgroup settings override client-side settings, then the query uses the encryption
     * configuration that is specified for the workgroup, and also uses the location for
     * storing query results specified in the workgroup.
     *
     * @var EncryptionConfiguration
     */
    public $encryptionConfiguration;

    /**
     * The location in Amazon S3 where your query results are stored, such as s3://path/to/query/bucket/.
     * To run the query, you must specify the query results location.
     *
     * @var string
     */
    public $outputLocation;

    /**
     * The location in Amazon S3 where query results are stored and the encryption option, if any,
     * used for query results. These are known as "client-side settings". If workgroup settings
     * override client-side settings, then the query uses the workgroup settings.
     *
     * @param EncryptionConfiguration|null $encryptionConfiguration If query results are encrypted in Amazon S3,
     * indicates the encryption option used (for example, SSE-KMS or CSE-KMS) and key information. This is a client-side
     * setting. If workgroup settings override client-side settings, then the query uses the encryption configuration
     * that is specified for the workgroup, and also uses the location for storing query results specified in the
     * workgroup.
     * @param string|null $outputLocation The location in Amazon S3 where your query results are stored,
     * such as s3://path/to/query/bucket/. To run the query, you must specify the query results location.
     */
    public function __construct(EncryptionConfiguration $encryptionConfiguration = null, string $outputLocation = null)
    {
        $this->encryptionConfiguration = $encryptionConfiguration;
        $this->outputLocation = $outputLocation;
    }
}
